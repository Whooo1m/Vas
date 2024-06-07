<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;


class PostController extends BaseController
{
    public function index()
    {
         $posts = Post::paginate(10);

         return view('post.index', compact('posts'));


    }
}
