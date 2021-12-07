<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show($slug)
    {
        $article = \DB::table('articles')->where('slug', $slug)->first();
        // dd($article);   // dummy or die 
        return view('articles/show', compact('article'));
    }
}
