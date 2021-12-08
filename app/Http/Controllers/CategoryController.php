<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(Category $category)
    {
        $articles = $category->articles()->paginate(3);
        return view('articles/index', compact('articles', 'category'));
    }
}
