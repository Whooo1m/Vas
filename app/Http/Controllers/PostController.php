<?php

namespace App\Http\Controllers;

use App\Http\Requests\FilterRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class PostController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();



        $page = $data['page'] ?? 1;
        $perPage = $data['per_page'] ?? 10;


        $posts = Post::paginate($perPage, ['*'], 'page', $page);

        return PostResource::collection($posts);
//        return view('post.index', compact('posts'));

    }
}
