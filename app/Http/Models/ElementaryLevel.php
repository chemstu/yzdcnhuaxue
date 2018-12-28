<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ElementaryLevel extends Model
{
    protected $fillable = [
        'elementary_name','sort','middle_level','high_level'
    ];

    public function highlevel()
    {
        return $this->belongsTo('App\Http\Models\HighLevel','high_level');
    }

    public function middlelevel()
    {
        return $this->belongsTo('App\Http\Models\MiddleLevel','middle_level');
    }
}
