@extends('blog.layouts.app')
@section('title', isset($category->title) ? $category->title: '站点主页')
@section('bg-img',asset('blog/img/home-bg.jpg'))
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                @foreach($posts as $post)
                <div class="post-preview">
                    <a href="{{route('post.show',$post->slug)}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            Problems look mighty small from 150 miles up
                        </h3>
                    </a>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on {{$post->created_at->diffForHumans()}}</p>
                </div>
                <hr>
                @endforeach
                <!-- Pager -->
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection