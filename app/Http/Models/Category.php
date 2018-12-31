<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'title',
    ];

    public function posts()
    {
        return $this->hasMany('App\Http\Models\Post','category_id');
    }
}
