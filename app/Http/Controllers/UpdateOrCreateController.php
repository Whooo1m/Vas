<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class UpdateOrCreateController extends Controller
{
    public function updateOrCreate()
    {
        $anotherPost = [
            'title' => ' updateorcreate some post',
            'content' => 'updateorcreate some Content',
            'image' => 'updateorcreate some image',
            'likes' => 213,
            'is_published' => 0,
        ];

        $post = Post::updateOrCreate([
            'title' => 'some some title',
        ],

            [
                'title' => 'some some title ',
                'content' => 'updateorcreate some Content',
                'image' => 'updateorcreate some image',
                'likes' => 213,
                'is_published' => 0,

            ]);
        dump($post->title);
        dd('bbaba');
    }
}

