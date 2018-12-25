<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public  function  index(){

        return view('blog.index');

    }

    public  function  post(){

        return view('blog.post');

    }
}
