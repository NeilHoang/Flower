<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function size()
    {
        return $this->belongsTo('App\Models\Size');
    }

    public function form()
    {
        return $this->belongsTo('App\Models\Form');
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    public function types()
    {
        return $this->belongsToMany('App\Models\Type');
    }

    public function themes()
    {
        return $this->belongsToMany('App\Models\Theme');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }
}
