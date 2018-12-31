<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class HighLevel extends Model
{
    protected $fillable = [
        'id','high_name','sort',
    ];

    public function middlelevels()
    {
        return $this->hasMany('App\Http\Models\MiddleLevel');
    }

    public function elementarylevels()
    {
        return $this->hasMany('App\Http\Models\ElementaryLevel','high_level');
    }
}
