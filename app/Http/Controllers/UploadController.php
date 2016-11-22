<?php

namespace App\Http\Controllers;

use App\Services\UploadServices;

use Illuminate\Http\Request;

use App\Http\Requests;



class UploadController extends Controller
{

    private $uploadServices;

    public function __construct(UploadServices $uploadServices)
    {
        $this->uploadServices = $uploadServices;
    }

    public function fileUpload(Request $request)
    {
        return $this->uploadServices->fileUploadServices($request);
    }

    public function  getMimeType(Request $request){
        return $this->uploadServices->getMimeType($request);
    }


}