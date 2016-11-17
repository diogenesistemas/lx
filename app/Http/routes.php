<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::get('/facebook/callback', ['as' => "callback", 'uses' => 'FacebookController@callback']);
Route::get('/facebook/login', ['as' => "login", 'uses' => 'FacebookController@login']);

Route::get('/teste', function () {

    
    return dd(session()->all());
});
