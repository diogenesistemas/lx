<?php

Route::get('/', ['as' => 'index', 'uses' => 'MainController@goIndex']);
Route::post('/upload-files', ['as' => "upload-files", 'uses' => 'UploadController@fileUpload']);
Route::post('/mimetype', ['as' => "mimetype", 'uses' => 'UploadController@getMimeType']);
