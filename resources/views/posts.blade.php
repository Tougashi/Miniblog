
@extends('layouts.main')
@section('container')
@if($posts->count())
   <h1 class="mb-5 text-center">{{ $title }}</h1>

   <div class="row justify-content-center mb-3">
    <div class="col-md-6">
      <form action="/posts">
        @if(request('category'))
        <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if(request('author'))
        <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <div class="input-group mb-3">
          <button type="submit">
          <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
          </button>
        </div> 
      </form>
    </div>
   </div>

   <div class="card mb-3 text-center">
      <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
      <div class="card-body">
        <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
        <small class="text-muted">
        <p class="card-text">By. <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }} </a> in 
         <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
       </small></p>
        <p class="card-text">{{ $posts[0]->excerpt }}</p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>  
      </div>
    </div>


    <div class="container px-2">
      <div class="row">
        @foreach ($posts->skip(1) as $post)
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="position-absolute px-3 py-1" style="background-color: rgba(0, 0, 0, 0.8)">
              <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}
              </div>
            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
              <small class="text-muted">
                <p class="card-text">By. <a href="/posts?author={{$post->author->username }}" class="text-decoration-none">{{ $post->author->name }} </a> {{ $post->created_at->diffForHumans() }}
                </p></small>
              <p class="card-text">{{ $post->excerpt }}</p>
              <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    @else
    <p class="text-center fs-4">No Post Found</p>
@endif

<div class="d-flex justify-content-center">
{{ $posts->links() }}
</div>
@endsection
 