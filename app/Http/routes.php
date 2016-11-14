<?php

use Illuminate\Support\Facades\Storage;

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::get('/resetar-sessao', ['as' => 'regenerate-session', 'uses' => 'UploadController@regenerateSession']);

Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::delete('/upload-files/delete/{id}', ['as' => "delete-files", 'uses' => 'UploadController@delete']);

Route::get('/email', ['as' => 'mail', 'uses' =>'EmailController@sendMail']);
Route::get('/file', function(){
    if(Storage::disk('upload')->exists('2016-11-14_01-11-42_4.pptx')){
        return 'existe';
    }
    return 'não existe';
});

