<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
class DeleteController extends BaseController
{
    public function __invoke()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');

    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index');

    }
    //fasf
}

