
@extends('layouts.master')


@section('title')
Articles
@endsection

@section('_articles')
    <h2>Articles</h2>
    <article>
        {{-- make a loop condition to display the articles if they exists  --}}
        @forelse($articles as $article)
            @include('partials.article')
        @empty
            @include('partials.no-articles')
        @endforelse
    </article>





@endsection