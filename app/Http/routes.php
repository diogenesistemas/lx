<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::get('/facebook/callback', ['as' => "callback", 'uses' => 'FacebookController@callback']);
Route::get('/facebook/login', ['as' => "login", 'uses' => 'FacebookController@login']);
Route::post('/mimetype', ['as' => "mimetype", 'uses' => 'UploadController@getMimeType']);
