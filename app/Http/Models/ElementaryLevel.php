<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class ElementaryLevel extends Model
{
    protected $fillable = [
        'elementary_name','sort','middle_level_id',
    ];
}
