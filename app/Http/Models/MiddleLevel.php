<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class MiddleLevel extends Model
{
    protected $fillable = [
        'middle_name','sort','high_level_id',
    ];

    public function highlevel()
    {
        return $this->belongsTo('App\Http\Models\HighLevel','high_level_id');
    }
}
