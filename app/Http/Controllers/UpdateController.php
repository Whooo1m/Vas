<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',

        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }
}
