@extends('layout')

@section('banner')
    <h1><a href="/">My Blog</a></h1>
@endsection

@section('content')

    @include('partials.posts-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @include('partials.post-featured-card')

        <div class="lg:grid lg:grid-cols-2">

            @include('partials.post-card')
            @include('partials.post-card')

        </div>

        <div class="lg:grid lg:grid-cols-3">

            @include('partials.post-card')
            @include('partials.post-card')
            @include('partials.post-card')

        </div>
    </main>

{{--@foreach($posts as $post)
    <article>
        <h1>
            <a href="/posts/{{ $post->slug }}"> {{ $post->title }} </a>
        </h1>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <div>{!! $post->excerpt !!}</div>
    </article>
@endforeach--}}

@endsection
