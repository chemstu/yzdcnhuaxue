<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title','category_id','status','thumbnail','body',
    ];

    public function category()
    {
        return $this->belongsTo('App\Http\Models\category','category_id');
    }
}
