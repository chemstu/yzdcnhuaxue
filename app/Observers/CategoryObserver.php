<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Http\Models\Category;


class CategoryObserver
{
    public function saving(Category $category)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $category->slug) {
            $category->slug = app(SlugTranslateHandler::class)->translate($category->title);
        }
    }
}
