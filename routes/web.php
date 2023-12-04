<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home',[
        "title" => "Home",
        "active" => 'home',
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "name" => "Adryan",
        "title" => "About",
        "active" => 'about',
        "email" => "adryanowh@gmail.com",
        "image" => "utaha.jpg"
    ]);
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        "active" => 'categories',
        'title' => 'Post Cegories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function(Category $category){
//     return view('posts', [
//         "active" => 'categories',
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('category','author'),
//     ]);
// });

// Route::get('/author/{author:username}', function(User $author){
//     return view('posts', [
//         'active'=> 'author',
//         'title' => "Post by Author : $author->name",
//         'posts' => $author->posts->load('category', 'author'),
//     ]);
// });