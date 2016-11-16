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
        return $request->all();
        return $this->uploadServices->fileUploadServices($request);
    }

    public function delete($id)
    {
        return $this->uploadServices->deleteServices($id);
    }

    public function regenerateSession()
    {
        return $this->uploadServices->regenerateSessionServices();
    }

    public function sendMail(Request $request)
    {
        return $this->uploadServices->sendMailService($request);
    }


}