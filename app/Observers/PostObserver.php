<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Http\Models\Post;

class PostObserver
{
    public function saving(Post $post)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $post->slug) {
            $post->slug = app(SlugTranslateHandler::class)->translate($post->title);
        }
    }
}
