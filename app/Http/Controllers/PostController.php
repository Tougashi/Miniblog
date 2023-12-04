<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{

    public function index()
    {

        $title = '';
        if(request('category')){
            $category = Category::firstWhere('slug' , request('category'));
            $title = ' in ' . $category->name;
        }
        $title = '';
        if(request('author')){
            $author = User::firstWhere('username' , request('author'));
            $title = ' by ' . $author->name;
        }

        return view('posts',[
            "title" => "All Posts",
            "active" => 'posts',
            "posts" => Post::latest()->filter(request(['search', 'category']))->paginate(7)->WithQueryString()
        ]);
    }

    public function show(Post $post)
    {
    return view('post', [
        "title" => "Single Post",
        "active" => 'posts',
        "post" => $post
    ]);
    }

}