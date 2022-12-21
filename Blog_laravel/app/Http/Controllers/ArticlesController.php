<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    //
    public function index()
    {
        $articles = [
            ['title' => 'titre article 1', 'body' => 'Contenu de l\'article 1'],
            ['title' => 'titre article 2', 'body' => 'Contenu de l\'article 2'],
            ['title' => 'titre article 3', 'body' => 'Contenu de l\'article 3']
            
        ];

        return view('layouts.articles', compact('articles'));

    }

    public function getAuthor()
    {
        $author = Article::all();
       return $author->user->name;

    }

}
