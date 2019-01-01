<?php

namespace App\Providers;
use App\Http\Models\Category;
use App\Http\Models\Post;
use App\Http\Models\Tag;
use App\Observers\CategoryObserver;
use App\Observers\PostObserver;
use App\Observers\TagObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; //避免1071错误，5,7以上数据库不需要


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191); //避免1071错误，5,7以上数据库不需要

        \Carbon\Carbon::setLocale('zh');    //中文显示友好时间戳

        Category::observe(CategoryObserver::class);

        Tag::observe(TagObserver::class);

        Post::observe(PostObserver::class);

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
