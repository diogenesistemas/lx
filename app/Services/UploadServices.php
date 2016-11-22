<?php

namespace App\Services;

use App\User;
use Validator;
use App\Upload;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Support\Facades\Mail;


class UploadServices
{
    private $carbon;
    private $id;
    private $userRepository;
    private $uploadRepository;
    private $file;
    private $rules = [
        'contact' => 'required',
        'message' => 'required',
        'file' => 'mimetypes:application/vnd.ms-powerpoint,'
            . 'image/png,'
            . 'application/vnd.openxmlformats-officedocument.wordprocessingml.document,'
            . 'application/msword,'
            . 'image/jpeg,'
            . 'application/vnd.ms-excel,'
            . 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,'
            . 'application/vnd.openxmlformats-officedocument.presentationml.presentation,'
            . 'application/pdf,'
            . 'image/vnd.dwg,'
            . 'image/vnd.adobe.photoshop,'
            . 'application/zip,'
            . '|required'
            . '|max:20480',
    ];

    private $rulesMessage = [
        'contact.required' => 'O preencimento do campo contato é necessário',
        'message.required' => 'O preencimento do campo mensagem é necessário',
        'file.required' => 'Insira ou arraste um arquivo para a área correspondente',
        'file.mimetypes' => 'O arquivo que você inseriu não é aceito por nós',
        'file.max' => 'O tamanho máximo parmitido por arquivo é 20MB',
    ];

    private $message;


    public function __construct(Carbon $carbon, User $userRepository, Upload $uploadRepository)
    {
        $this->carbon = $carbon;
        $this->userRepository = $userRepository;
        $this->uploadRepository = $uploadRepository;
    }

    public function fileUploadServices($request)
    {

        $this->message = Validator::make($request->all(), $this->rules, $this->rulesMessage)->errors()->all();

        if (count($this->message) > 0) {
            return $this->response($this->message[0], false, "", 'warning');
        }

        $this->file = $request->file('file');

        if ($this->file->isValid()) {

            $user = $this->userRepository->create(['session_id' => session()->getId()]);
            $confirmation = $this->sendMailService($request, $this->file, $user);
            if ($confirmation == 1) {
                return $this->response(config('lx.send_message'), true, config('lx.tiket_prefixer') . $user->id, 'success');
            } else {
                return $this->response(config('lx.no_send_message'));
            }

        } else {
            return $this->response(config('lx.fail_upload_file'));
        }


    }

    public function sendMailService($request, $file, $user)
    {
        $response = Mail::send('mail.mensagem-email', ['user' => $request], function ($message) use ($request, $file, $user) {
            $message->from(config('lx.from'), $request->contact);
            $message->to(config('lx.to'))->subject(config('lx.tiket_prefixer') . $user->id);
            $message->attachData(file_get_contents($file->getPathname()), $file->getClientOriginalName(), ['mime' => $file->getClientMimeType()]);
        });
        return $response;

    }

    private function response($message, $success = false, $file_id = "", $error_type = "error")
    {
        return response()->json([
            'message' => $message,
            'success' => $success,
            'file_id' => $file_id,
            'error_type' => $error_type,
        ]);
    }

    public function getMimeType($request)
    {
        $this->file = $request->file('file');
        if ($this->file->isValid()) {
                return $this->file->getMimeType();
        }
    }

}