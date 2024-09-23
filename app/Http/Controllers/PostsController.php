<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class PostsController extends Controller
{
    //
    public function index(){
        return view('posts.index');
    }

    public function show(){
        $posts = Post::get();
        return view('index', compact('posts'));
    }

    // public function navigation(){
    //     $username = Auth::user();
    //     $profile= User::where('username',$username)->get();
    //     return $profile;
    // }
}
