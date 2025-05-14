<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //
     protected $table = 'contents';

    protected $fillable = ['title', 'body', 'img'];

    public $timestamps = false;
}
