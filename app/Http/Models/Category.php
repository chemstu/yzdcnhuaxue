<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title','slug'
    ];

    public function posts()
    {
        return $this->hasMany('App\Http\Models\Post','category_id')->paginate(10);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
