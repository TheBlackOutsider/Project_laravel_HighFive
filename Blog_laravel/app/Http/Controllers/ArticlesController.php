<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class ArticlesController extends Controller {
    //
    public function index() {
        $articles = Article:: with ('user') -> orderBy('created_at', 'DESC') -> get();

        return view('articles.articles', compact('articles'));

    }

    public function show($id) {
        $article = Article::with(['comments' => function($query) {
            $query->with('user');
        }])->findOrFail($id);
        // dd($article);
        // ddd($article);
        return view('articles.show', compact('article'));
    }


    // public function show(Article $article) {
    //     return view('articles.show', compact('article'));
    // }

    // public function getDetails(int $id) {
    //     $detail = Article:: find($id);
    //     return view('articles.show_article', compact('detail'));

    // }

}


