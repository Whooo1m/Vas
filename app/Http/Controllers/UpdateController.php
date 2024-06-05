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
            'category_id' => '',
            'tags' => '',

        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }
}
