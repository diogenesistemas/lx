<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
