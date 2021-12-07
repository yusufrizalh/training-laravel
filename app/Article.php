<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/*
    # Model baru dibuat dengan: php artisan make:model Article
    Ada aturan yang mengatur cara penulisan: Eloquent
      > nama Model ditulis secara singular
      > nama Table ditulis secara plural
*/

class Article extends Model
{
    // jika Eloquent tidak terpenuhi, wajib mendefinisikan nama Table
    // protected $table = "article";

    // model binding dengan slug
    // public function getRouteKeyName()
    // {
    //     // mengenalkan slug sebagai kunci 
    //     return 'slug';
    // }
}

/*
    # Model binding
      > menampilkan data berdasarkan default Model -> primary key adalah id
*/