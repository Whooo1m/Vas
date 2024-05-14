<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create()
    {
       return view('post.create');
    }
}
