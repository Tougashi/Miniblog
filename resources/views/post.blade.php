@extends('layouts.main')
@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h1 class="mb-3">{{ $post->title }}</h1>

            <p>By. <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                <a href="/posts?category={{$post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        
                <img src="https://source.unsplash.com/1200x800?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}
                " class="img-fluid">
        <article class="my-4 fs-5">
            {!! $post->body !!}
            <a href="/posts">Back</a>
        </article>
        </div>
    </div>
</div>

  
@endsection
