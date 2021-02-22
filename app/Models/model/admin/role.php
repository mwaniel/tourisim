<?php

namespace App\Models\model\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    public function permissions()
    {
        return $this-> belongsToMany('App\Models\model\admin\Permission','permission_role');
    }
}
