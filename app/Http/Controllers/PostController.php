<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
     public function home(){

    $posts = Post::orderBy('created_at', 'desc')->limit(3)->get(); // Or Post::all()
    return view('home', compact('posts'));
}


// ph




public function showfullpost($slug)
{
    $post = Post::where('slug', $slug)->firstOrFail();
    return view('blogdetails', compact('post'));
}
}
