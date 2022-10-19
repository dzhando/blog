<?php

namespace App\Http\Controllers\Post\Like;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Post;


class StoreController extends Controller
{
    public function __invoke(Post $post)
    {
        //toogle()-> если есть отвязв. если нет подвязв.
        auth()->user()->likedPosts()->toggle($post->id);

        return redirect()->route('post.index',$post->id);
    }
}
