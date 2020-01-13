<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function getBlog(){
        return view('frontend.blog.blog');
    }
    function getBlogSingle(){
        return view('frontend.blog.blog-single');
    }
}
