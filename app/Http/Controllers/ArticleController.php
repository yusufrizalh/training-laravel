<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // menampilkan semua data yang ada di table articles
        return view('articles/index', [
            'articles' => Article::latest()->paginate(3),
        ]);
    }

    public function create()
    {
        // untuk membuka form create new article
        return view('articles/create');
    }

    public function store(Request $request)
    {
        // proses menyimpan data kedalam database
        $article = new Article;
        $article->title = $request->title;
        $article->slug = \Str::slug($request->title);
        $article->body = $request->body;
        $article->save();

        return redirect()->to('/articles');
    }

    public function show(Article $article)
    {
        return view('articles/show', compact('article'));
    }

    public function edit(Article $article)
    {
        //
    }

    public function update(Request $request, Article $article)
    {
        //
    }

    public function destroy(Article $article)
    {
        //
    }
}
