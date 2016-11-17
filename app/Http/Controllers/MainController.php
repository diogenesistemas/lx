<?php

namespace App\Http\Controllers;

use Facebook\Exceptions\FacebookResponseException;
use Facebook\Facebook;
use Illuminate\Http\Request;

use App\Http\Requests;

class MainController extends Controller
{
    /**
     * @var Facebook
     */
    private $facebook;

    public function __construct()
    {
        $this->initFacebook();
    }

    public function goIndex()
    {
        $fan_page_token = $this->getPageToken($this->getUserTokenDb());
        $data_ratings = $this->getDataRatings($fan_page_token);
        return view("index", compact($data_ratings)); //lebrar de validar repostas


    }

    private function initFacebook()
    {
        $this->facebook = new Facebook([
            'app_id' => env("FACEBOOK_APP_ID", null),
            'app_secret' => env("FACEBOOK_APP_SECRET"), null,
            'default_graph_version' => env("FACEBOOK_APP_VERSION", null)
        ]);
    }

    private function getFanPageIdDb()
    {
        //substituir pelo banco de dados
        return env("FACEBOOK_APP_FANPAGE_ID");
    }

    private function getUserTokenDb()
    {
        //substituir pelo banco de dados
        return env("FACEBOOK_APP_USER_ACCESS_TOKEN");
    }

    private function getPageToken($user_token)
    {
        $accounts = $this->facebook->get('/me/accounts', $user_token)->getDecodedBody();
        return $this->resultComparePages($accounts);
    }

    private function resultComparePages(array $pages_Meneged_Client)
    {
        $fanpage_access_token = null;
        $fanpage_id = $this->getFanPageIdDb();
        foreach ($pages_Meneged_Client["data"] as $result) {
            if ($result["id"] == $fanpage_id) {
                $fanpage_access_token = $result["access_token"];
            }
            return $fanpage_access_token;
        }
    }

    private function getDataRatings($fan_page_token)
    {
        $ratings = $this->facebook->get('/me/ratings', $fan_page_token)->getDecodedBody();
        return $ratings['data'];
    }

}

