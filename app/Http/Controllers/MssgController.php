<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MssgController extends Controller
{
    public function showMssg(){
        return view('blog.private-mssg');

    }

}
