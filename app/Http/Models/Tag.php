<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'title','slug'
    ];

    public function posts()
    {
        return $this->belongsToMany('App\Http\Models\post','post_tags')->paginate(10);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
