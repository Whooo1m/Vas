<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;

class CreateController extends Controller
{
    public function create()
    {
        $categories = Category::all();

        $tags = Tag::all();

        return view('post.create', compact('categories','tags'));
    }
}
