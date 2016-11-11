<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Storage;


class UploadController extends Controller
{

    private $carbon;
    private $name;
    private $originalName;

    public function __construct(Carbon $carbon)
    {
        $this->carbon = $carbon;
    }

    public function fileUpload(Request $request)
    {
        try {

            if ($request->file('file')->isValid()) {

                $file = $request->file('file');
                $name = $this->setFileName($file->getClientOriginalName());
                $path = $file->getRealPath();

                Storage::disk('upload')->put($name, $path);

                if (!Storage::disk('upload')->exists($this->getFileName())) {
                    return json_encode([
                        'message' => 'Arquivo corrompido ou inexistente!',
                        'success' => false
                    ]);
                }
                session()->put([
                    'fileName'=>$this->getFileName(),
                    'originalFileName'=>$this->getOriginalFileName()
                ]);
                
                return json_encode([
                    'message' => 'Upload Completo!',
                    'success' => true
                ]);

            } else {
                return json_encode([
                    'message' => 'Falha no upload!',
                    'success' => false
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

    private function getFileName()
    {
        return $this->name;
    }

    private function getOriginalFileName()
    {
        return $this->originalName;
    }
}
