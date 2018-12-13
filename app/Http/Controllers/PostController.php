<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost(){
        return view ('blog.public-post');
    }
}
