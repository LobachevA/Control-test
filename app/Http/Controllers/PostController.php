<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post){
        $res = $post->getPublished();
        return view('posts.list',['posts' => $res]);
    }

   /* public function newtext(Post $post, Request $request){
        $post->create($request->all());
        $res = $post->getPublished();
        return view('posts.list',['posts' => $res]);
    }*/

    public function ajax(Post $post, Request $request) {
        $post->create($request->all());
        $res=$post->getPublished();
        return view('posts.ajax',['posts'=> $res, 'request' => $request]);
    }
}
