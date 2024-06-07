<?php

namespace App\Http\Controllers;

use App\Models\Post;


class AboutController extends BaseController
{
    public function index()
    {

        return view('about');



    }
}
