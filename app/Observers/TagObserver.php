<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Http\Models\Tag;

class TagObserver
{
    public function saving(Tag $tag)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $tag->slug) {
            $tag->slug = app(SlugTranslateHandler::class)->translate($tag->title);
        }
    }
}
