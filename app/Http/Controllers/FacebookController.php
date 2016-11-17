<?php

namespace App\Http\Controllers;

use App\User;
use Facebook\Exceptions\FacebookSDKException;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use SammyK\LaravelFacebookSdk\LaravelFacebookSdk;

class FacebookController extends Controller
{

    private $facebookSdk;

    public function __construct(LaravelFacebookSdk $facebookSdk, User $userRepository)
    {
        $this->facebookSdk = $facebookSdk;
    }

    public function login(){
       
        $login_url = $this->facebookSdk->getLoginUrl(['email']);
        return view('facebook.login', compact('login_url'));

    }

    public function callback(){
        try {
            $token = $this->facebookSdk->getAccessTokenFromRedirect();

        } catch (FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Access token will be null if the user denied the request
        // or if someone just hit this URL outside of the OAuth flow.
        if (!$token) {
            // Get the redirect helper
            $helper = $this->facebookSdk->getRedirectLoginHelper();

            if (!$helper->getError()) {
                abort(403, 'Unauthorized action.');
            }

            // User denied the request
            dd(
                $helper->getError(),
                $helper->getErrorCode(),
                $helper->getErrorReason(),
                $helper->getErrorDescription()
            );
        }

        if (!$token->isLongLived()) {
            // OAuth 2.0 client handler
            $oauth_client = $this->facebookSdk->getOAuth2Client();

            // Extend the access token.
            try {
                $token = $oauth_client->getLongLivedAccessToken($token);
                return dd($token);

            } catch (FacebookSDKException $e) {
                dd($e->getMessage());
            }
        }

        $this->facebookSdk->setDefaultAccessToken($token);

        // Save for later
        Session::put('fb_user_access_token', (string)$token);

        // Get basic info on the user from Facebook.
        try {
            $response = $this->facebookSdk->get('/me?fields=id,name,email');
        } catch (FacebookSDKException $e) {
            dd($e->getMessage());
        }

        // Convert the response to a `Facebook/GraphNodes/GraphUser` collection
        $facebook_user = $response->getGraphUser();


        // Create the user if it does not exist or update the existing entry.
        // This will only work if you've added the SyncableGraphNodeTrait to your User model.
//        $user = $this->userRepository->createOrUpdateGraphNode($facebook_user);

        // Log the user into Laravel
//    Auth::login($user);

        return redirect('/')->with('message', 'Successfully logged in with Facebook');
    }
}
