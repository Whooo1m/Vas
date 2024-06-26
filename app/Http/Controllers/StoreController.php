<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use App\Models\PostTag;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {


        $data = $request->validated();

        $post = $this->service->store($data);
        return $post instanceof Post ? new PostResource($post) : $post;


//        return redirect()->route('post.index');

    }
}
