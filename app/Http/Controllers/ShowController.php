<?php

namespace App\Http\Controllers;

use App\Models\Post;


class ShowController extends Controller
{
    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }
}
