<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class forum_message extends Model
{
    public function Userm()
    {
        return $this->belongsTo('App\Models\Userm');
    }
    public function forum()
    {
        return $this->belongsTo('App\Models\Forum');
    }
}
