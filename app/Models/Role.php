<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function Userm()
    {
        return $this->belongsToMany('App\Models\Userm');
    }
}
