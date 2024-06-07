<?php

namespace App\Http\Controllers;

use App\Models\Post;


class StoreController extends Controller
{
    public function store()
    {
        $data = request()->validate([
            'title' => 'string|required',
            'content' => 'string|required',
            'image' => 'string|required',
            'category_id' => '',
            'tags' => '',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);



        return redirect()->route('post.index');

    }
}
