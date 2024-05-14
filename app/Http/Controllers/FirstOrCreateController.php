<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FirstOrCreateController extends Controller
{
    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some Content',
            'image' => 'some image',
            'likes' => 2123,
            'is_published' => 1,
        ];
       $post = Post::firstOrCreate([
            'title' => 'some title post',
        ],
            [
                'title' => 'some title post',
                'content' => 'some Content',
                'image' => 'some image',
                'likes' => 2123,
                'is_published' => 1,

                ]);
       dump($post->content);
        dd('finished');
    }
}

