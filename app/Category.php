<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /* aturan Eloquent untuk relasi antar tabel:
        > nama function ditulis nama tabel lawannya
        > hasMany ditulis untuk model yang memiliki relasi many
    */
    // Category memiliki relasi one
    // Article memiliki relasi many

    protected $fillable = ['name', 'slug'];

    public function articles()
    {
        // membuat relasi menuju ke table yang many
        return $this->hasMany(Article::class);
    }
}
