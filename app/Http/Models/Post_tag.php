<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Post_tag extends Model
{
    protected $fillable = [
         'id','post_id','tag_id',
    ];
}
