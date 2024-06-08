<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;


class PostController extends BaseController
{
    public function __invoke()
    {
        $posts = Post::paginate(10);

       return view('admin.post.index', compact('posts'));

    }
}
