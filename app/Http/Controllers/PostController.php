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


public function showfullpost($id)
{
    $post = Post::findOrFail($id);
    return view('blogdetails', compact('post'));
}
}
