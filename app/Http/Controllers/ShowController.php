<?php

namespace App\Http\Controllers;


class ShowController extends Controller
{
    public function show()
    {
        return view('post.show', compact('post'));
    }
}
