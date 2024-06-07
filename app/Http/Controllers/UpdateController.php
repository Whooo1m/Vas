<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function update(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();

        $this->service->update($post, $data);

        return redirect()->route('post.show', $post->id);
    }
}
