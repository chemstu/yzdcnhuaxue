<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','slug','category_id','status','thumbnail','body',
    ];

    public function category()
    {
        return $this->belongsTo('App\Http\Models\category','category_id');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Http\Models\tag','post_tags')->withTimestamps();
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }

}
