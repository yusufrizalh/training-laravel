<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // membuat fillable untuk field yang ingin diinput
    protected $fillable = ['title', 'slug', 'body'];

    // protected $guarded = [];    // kurang aman
}
