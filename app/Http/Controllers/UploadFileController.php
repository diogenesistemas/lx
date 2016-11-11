<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UploadFileController extends Controller
{
	
	public function __construct(){
		
	}

    public function addFile(Request $request){
    	return $request->file('file');

    	// Storage::put('upload/'.$user->id,
     //        file_get_contents($request->file('avatar')->getRealPath())
     //    );
    }
}
