<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index () {
        return view('blogs.index');
    }

    public function post () {
        return view('blogs.post');
    }
}
