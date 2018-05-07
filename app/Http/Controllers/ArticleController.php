<?php

namespace App\Http\Controllers;


use App\Article;

class ArticleController extends Controller
{
    function ShowAll()
    {
        $articles = Article::all();
        return view('article', ['articles' => $articles]);
    }

}