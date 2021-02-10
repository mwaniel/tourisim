<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
    public function category(){
        return $this->belongsToMany(category::class);
    }
    public function getRouteKeyName()
    {
        return'slug';
    }
}

