
@extends('layouts.main')

@section('container')
<h1>Post Category : {{ $category }}</h1>

    @foreach ($posts as $post)
        <article>
            <h2><a href="/posts/{{ $post->id }}"> {{ $post->title }}</a></h2>
            <h5>{{ $post["author"] }} <a href="/categories/"> {{ $post->category->slug }}</a></h5>
            <p>{{ $post["exceprt"] }}</p>
        </article>
    @endforeach
@endsection