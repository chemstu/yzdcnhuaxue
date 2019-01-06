<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Http\Models\Category;
use App\Jobs\TranslateSlug;


class CategoryObserver
{
    public function saved(Category $category)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        if ( ! $category->slug) {
            // 推送任务到队列
            dispatch(new TranslateSlug($category));

        }
    }
}
