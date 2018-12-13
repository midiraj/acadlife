<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function showForm() {
        return view('pages.add-course');
    }

    public function addBlog(){
        
    }
}
