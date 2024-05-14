<?php

namespace App\Http\Controllers;

use App\Models\Post;


class EditController extends Controller
{
    public function edit(Post $post)
    {
       return view('post.edit', compact('post'));
    }
}
