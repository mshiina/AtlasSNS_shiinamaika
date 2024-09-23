<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FollowsController extends Controller
{
    // public function followList(){
    //     return view('follows.followList');
    // }
    // public function followerList(){
    //     return view('follows.followerList');
    // }
    public function show(){
        return view('posts.index');
    }
    public function postCounts(){
        $posts = Post::get();
        return view('login', compact('posts'));
    }
}
