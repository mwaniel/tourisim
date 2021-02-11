<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    use HasFactory;
    public function tags()
    {
        return $this->belongsToMany('App\Models\tag','post_tag')->withTimestamps();
    }
    public function category()
    {
        return $this->belongsToMany('App\Models\category','category_post')->withTimestamps();
    }
    public function getRouteKeyName()
    {
       return 'slug'; 
    }
}
