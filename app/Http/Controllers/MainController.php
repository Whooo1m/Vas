<?php

namespace App\Http\Controllers;

use App\Models\Post;


class MainController extends BaseController
{
    public function index()
    {

        return view('main');



    }
}
