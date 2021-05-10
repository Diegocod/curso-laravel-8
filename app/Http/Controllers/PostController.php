<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();



        return view('admin.posts.index', [ /* ou usar a função com: compact('posts'); */
            'posts' => $posts
        ]);
    }
}
