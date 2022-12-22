@extends('layouts.master')


@section('show_articles')

<article>
    <p>Article {{$detail->id}}</p>
    <p>{{ $detail['body']}}</p>
    <p>{{ $detail['created_at']}}</p>
    <p>By {{ $detail->user->name}}</p>
</article>

@endsection