<?php

namespace App\Exceptions;

use ErrorException;
use Exception;
use Illuminate\Session\TokenMismatchException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        AuthorizationException::class,
        HttpException::class,
        ModelNotFoundException::class,
        TokenMismatchException::class,
        ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $e
     * @return void
     */
    public function report(Exception $e)
    {
        parent::report($e);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $e
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $e)
    {

        // if ($e instanceof MethodNotAllowedHttpException) {
        //     return response()->json([
        //         'message' => "Methodo nao aceito",
        //         'success' => false,
        //         'file_id' => "",
        //         "error_type"=>"error"
        //     ]);
        // }
        // if ($e instanceof ErrorException) {
        //     return response()->json([
        //         'message' => "Erro Interno",
        //         'success' => false,
        //         'file_id' => "",
        //         "error_type"=>"error"
        //     ], 500);
        // }

        return parent::render($request, $e);
    }
}
