<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::delete('/upload-files/delete/{id}', ['as' => "delete-files", 'uses' => 'UploadController@delete']);
Route::post('/upload-files/send', ['as' => "send-email", 'uses' => 'UploadController@sendMail']);



Route::get('/resetar-sessao', ['as' => 'regenerate-session', 'uses' => 'UploadController@regenerateSession']);
Route::get('/email', ['as' => 'mail', 'uses' => 'EmailController@sendMail']);

