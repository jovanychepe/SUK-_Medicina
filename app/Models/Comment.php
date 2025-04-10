<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function Userm()
    {
        return $this->belongsTo('App\Models\Userm');
    }
    public function Like()
    {
        return $this->hasMany('App\Models\Like');
    }
    public function plant()
    {
        return $this->belongsTo('App\Models\Plant');
    }

}
