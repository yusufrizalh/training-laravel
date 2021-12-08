<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // membuat fillable untuk field yang ingin diinput
    protected $fillable = ['title', 'slug', 'body', 'category_id'];

    // protected $guarded = [];    // kurang aman

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
