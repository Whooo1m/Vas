<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class PostController extends BaseController
{
    public function index()
    {


        $posts = Post::paginate(10);
        return view('post.index', compact('posts'));

    }
}
