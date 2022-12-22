@extends('layouts.master')


@section('show')


<article class="show_article">
    <h3>Subject : {{$article->title}}</h3>
    <p >{{ $article['body']}}</p>
    <p>{{ $article['created_at']}}</p>
    <p>By {{ $article->user->name}}</p>

    <div class="comment_container">
        @foreach($article->comments as $comment)
        <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
        <p>{{ $comment->comment }}</p>
        <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
        @endforeach
    </div>














    <div class="sub_nav_into-page">
        <span class="click_to_preview" ><a class=" buttn"  href="/articles">Précédent</a></span>
        <span class="click_go_to_page1" ><a class=" buttn" href="/articles">Back to page</a></span>
        <span class="click_to_next" ><a class=" buttn"  href="/articles/{{$article->id=$article->id+1}}">Suivant</a></span>
    </div>

</article>

@endsection