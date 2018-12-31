@extends('blog.layouts.app')
@section('title','Blog主页-中学化学教学研究')
@section('bg-img',asset('blog/img/post-bg.jpg'))
@section('content')
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    {!! $post->body !!}
                </div>
            </div>
        </div>
    </article>
@endsection