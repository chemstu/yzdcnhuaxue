<?php

namespace App\Http\Controllers\Front;

use App\Http\Models\Category;
use App\Http\Models\Post;
use App\Http\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::orderBy('created_at', 'desc')->paginate(15);
        return view('blog.index',compact('posts'));
    }


    public function category(Category $category)
    {
        $posts= $category->posts();
        return view('blog.index',compact('posts','category'));
    }


    public function tag(Tag $tag)
    {
        $posts= $tag->posts();
        return view('blog.index',compact('posts','tag'));
    }

    public function show(Post $post)
    {
       return view('blog.post',compact('post'));
    }

}
