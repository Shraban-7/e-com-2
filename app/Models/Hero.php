<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $guarded = ['id'];

    public function scopeSlider($query)
    {
        return $query->where('is_slider',1);
    }

    public function scopePromo($query)
    {
        return $query->where('is_slider',0);
    }
}
