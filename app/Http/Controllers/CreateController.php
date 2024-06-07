<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class CreateController extends BaseController
{
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('post.create', compact('categories','tags'));
    }
}
