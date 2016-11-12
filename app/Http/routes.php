<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::get('/resetar-sessao', ['as' => 'regenerate-session', 'uses' => 'UploadController@regenerateSession']);

Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::delete('/upload-files/delete/{id}', ['as' => "delete-files", 'uses' => 'UploadController@delete']);

/*Route::get('/email', ['as' => 'mail', 'uses' =>'EmailController@sendMail']);*/

