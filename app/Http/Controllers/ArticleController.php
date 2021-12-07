<?php

namespace App\Http\Controllers;

use App\Article;    // Model
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function show(Article $article)  // model binding
    {
        return view('articles/show', compact('article'));
    }
}
