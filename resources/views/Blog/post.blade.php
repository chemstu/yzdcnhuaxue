@extends('blog.layouts.app')
@section('title',$post->title)
@section('bg-img',asset('blog/img/post-bg.jpg'))
@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">所属分类：
                    <a href="{{route('category',$post->category->slug)}}">{{$post->category->title}}</a>
                    {!! $post->body !!}
                    标签：
                    @foreach($post->tags as $tag)
                        <a href="{{route('tag',$tag->slug)}}">{{$tag->title}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection