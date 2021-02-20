<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\ServiceProvider;
class UserController extends Controller
{
    public function post(post $post){
        $posts = post::where('status',1)->get();
        return view('user.blog',compact('posts'));
    }
}




