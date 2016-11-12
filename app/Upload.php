<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    protected $fillable = [
        'file_name', 'path', 'mime_type', 'extension', 'file_original_name',
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
}
