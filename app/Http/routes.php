<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);

Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadFileController@addFile']);

/*Route::get('/email', ['as' => 'mail', 'uses' =>'EmailController@sendMail']);*/

/*Route::get('/envio-email', function () {
    return view('teste-envio-email');
});*/

/*Route::get('/acao', ['as' => 'acao-email', 'uses' =>'TesteEmailController@sendMail']);*/

