<?php

namespace App\Http\Controllers;

use App\Models\Post;


class ContactController extends BaseController
{
    public function index()
    {
        $posts = Post::all();

        return view('contacts');



    }
}
