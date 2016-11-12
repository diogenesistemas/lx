<?php

namespace App\Http\Controllers;

use App\Upload;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{

    private $carbon;
    private $name;
    private $originalName;
    private $mimeType;
    private $extension;
    private $id;
    private $sessionId;
    private $userRepository;
    private $user;
    private $path;
    private $uploadRepository;


    public function __construct(Carbon $carbon, User $userRepository, Upload $uploadRepository)
    {
        $this->carbon = $carbon;
        $this->sessionId = session()->getId();
        $this->userRepository = $userRepository;
        $this->uploadRepository = $uploadRepository;
    }

    public function fileUpload(Request $request)
    {
        try {


            if ($request->file('file')->isValid()) {

                $this->user = $this->userRepository->where('session_id', $this->sessionId)->get();
                if ($this->user->count() == 0) {
                    $this->user = $this->userRepository->create(['session_id' => $this->sessionId]);
                    session()->put('db_session_id', $this->user->session_id);
                    session()->put('user_id', $this->user->id);
                }
                $this->sessionUserId = session('user_id');
                $file = $request->file('file');
                $this->setFileName($file->getClientOriginalName());
                $this->path = storage_path('app/upload/');
                $this->mimeType = $file->getClientMimeType();
                $this->extension = $file->getClientOriginalExtension();

                $request->file('file')->move($this->path, $this->name);

                $this->user = $this->userRepository->find($this->sessionUserId);
                if ($this->user) {
                    $file = $this->user->file()->create([
                        'file_name' => $this->name,
                        'file_original_name' => $this->originalName,
                        'mime_type' => $this->mimeType,
                        'extension' => $this->extension,
                    ]);
                }

                return response()->json([
                    'message' => 'Upload Completo!',
                    'success' => true,
                    'file_id' => $file->id,
                ]);


            } else {
                return response()->json([
                    'message' => 'Falha no upload!',
                    'success' => false,
                    'file_id' => null
                ]);
            }

        } catch (\ErrorException $e) {
            return $e->getMessage();
        }


    }

    private function setFileName($name)
    {
        if ($name) {
            $date = $this->carbon->now()->format('Y-m-d_H-n-s');
            $this->originalName = $name;
            $this->name = $date . "_" . str_replace(['', ' ', '  ', '   ', '    '], '_', $name);
            return $this->name;
        }
        return null;
    }


    public function regenerateSession()
    {
        Session::flush();
        Session::regenerate();
        session()->put('db_session_id', 'A');
        session()->put('user_id', '0');
        return session()->all();
    }

    public function delete($id)
    {
        if ($id != null) {
            $delete = $this->uploadRepository->find($id);
            if ($delete != null) {
                if (Storage::disk('upload')->exists($delete->file_name)) {

                    Storage::disk('upload')->delete($delete->file_name);

                    if ($delete->delete()) {
                        return response()->json([
                            'message' => 'Deletado!',
                            'success' => true,
                            'file_name' => $delete->file_original_name,
                        ]);

                    } else {
                        return response()->json([
                            'message' => 'Falha ao deletar',
                            'success' => false,
                            'file_name' => null,

                        ]);
                    }
                }
            }
        }


    }


}