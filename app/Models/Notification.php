<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
public function Userm()
    {
        return $this->belongsTo('App\Models\Userm');
    }

}
