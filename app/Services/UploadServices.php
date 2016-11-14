<?php

namespace App\Services;

use App\Upload;
use App\User;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UploadServices
{
    private $carbon;
    private $name;
    private $originalName;
    private $id;
    private $userRepository;
    private $user;
    private $path;
    private $uploadRepository;
    private $databaseFile;
    private $sessionUserId;
    private $file;


    public function __construct(Carbon $carbon, User $userRepository, Upload $uploadRepository)
    {
        $this->carbon = $carbon;
        $this->userRepository = $userRepository;
        $this->uploadRepository = $uploadRepository;
    }

    public function fileUploadServices($request)
    {
        try {
            $this->file = $request->file('file');
            if ($this->file->isValid()) {

                $this->sessionUserId = $this->sessionValidate(session()->getId());
                $this->path = $this->putFileStorage($this->file->getClientOriginalName(), $this->file->getPathname());
                $this->setFileInfoToDatabase(
                    $this->sessionUserId, $this->name,
                    $this->originalName, $this->file->getClientMimeType(),
                    $this->file->getClientOriginalExtension(), $this->path
                );

                return $this->response('Upload Completo!', true, $this->getFileInfoToDatabase()->id);

            } else {
                return $this->response('Falha no upload!');
            }

        } catch (\ErrorException $e) {
            return $e->getMessage();
        }


    }

    private function sessionValidate($session_id)
    {
        $this->user = $this->userRepository->where('session_id', $session_id);
        if ($this->user->count() == 0) {
            $this->user = $this->userRepository->create(['session_id' => $session_id]);
            session()->put('db_session_id', $this->user->session_id);
            session()->put('user_id', $this->user->id);
        }
        return session('user_id');
    }

    private function putFileStorage($file_original_name, $temp_file_path)
    {
        $this->name = $this->setFileName($file_original_name);
        Storage::put($this->name, file_get_contents($temp_file_path));
        $path = Storage::url($this->name);
        return $path;
    }

    private function setFileInfoToDatabase($sessionUserId, $name, $originalName, $mimeType, $extension, $path)
    {
        $this->user = $this->userRepository->find($sessionUserId);
        if ($this->user) {
            $this->databaseFile = $this->user->file()->create([
                'file_name' => $name,
                'file_original_name' => $originalName,
                'mime_type' => $mimeType,
                'extension' => $extension,
                'path' => $path,
            ]);
        }
    }

    private function getFileInfoToDatabase()
    {
        return $this->databaseFile;
    }

    private function response($message, $success = false, $file_id = null)
    {
        return response()->json([
            'message' => $message,
            'success' => $success,
            'file_id' => $file_id
        ]);
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


    public function regenerateSessionServices()
    {
        Session::flush();
        Session::regenerate();
        session()->put('db_session_id', '0');
        session()->put('user_id', '0');
        return session()->all();
    }

    public function deleteServices($id)
    {
        if ($id != null) {
            $delete = $this->uploadRepository->find($id);
            if ($delete != null) {
                if (Storage::exists($delete->file_name)) {

                    Storage::delete($delete->file_name);

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