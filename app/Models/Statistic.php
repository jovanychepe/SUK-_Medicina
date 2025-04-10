<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    
 public function Userm()
 {
     return $this->belongsTo('App\Models\Userm');
 }

}
