<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
        return view('posts.index', ['posts' => $posts]);
    }

    public function show($slug = null)
    {
        $post = Post::findBySlug($slug);
        return view('posts.show', ['post' => $post]);
    }
}
