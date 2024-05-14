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

        ]);
        Post::create($data);
        return redirect()->route('post.index');






    }
}
