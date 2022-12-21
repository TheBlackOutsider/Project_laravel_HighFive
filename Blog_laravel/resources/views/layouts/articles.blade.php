require "App"

@extends('layouts.master')


@section('title')
Articles
@endsection

@section('_articles')
    <h2>Articles</h2>
    <div>
        {{-- make a loop condition to display the articles if they exists  --}}
        @forelse($articles as $article)
            @include('articles.index')
        @empty
            @include('articles.no-articles')
        @endforelse
    </div>





@endsection