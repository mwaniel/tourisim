<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function post(post $post)
    {
        return view('user.post',compact('post'));
    }
}
