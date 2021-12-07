<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;

/*
    # Factory: membuat dummy data dengan tujuan untuk testing
      > tools untuk mengenerate dummy data: Tinker dijalankan melalui Terminal
      > generate dummy data melalui file factory: Faker 
*/

$factory->define(Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),  // This is my article
        'slug' => \Str::slug($faker->sentence()),   // this-is-my-article
        'body' => $faker->paragraph(100),
    ];
});
