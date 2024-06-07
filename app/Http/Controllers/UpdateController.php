<?php

namespace App\Http\Controllers;

class UpdateController extends Controller
{
   public function update()
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
