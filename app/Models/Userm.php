<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Userm extends Model

{
    public function comment()
    {
        return $this->hasMany('App\Models\comment');
    }

    public function Notification()
    {
        return $this->hasMany('App\Models\Notification');
    }

    public function Statistic()
    {
        return $this->hasMany('App\Models\Statistic');
    }

    public function fourum_message()
    {
        return $this->hasMany('App\Models\fourum_message');
    }

    public function Like()
    {
        return $this->hasMany('App\Models\Like');
    }
    public function forum()
    {
        return $this->belongsToMany('App\Models\Forum');
    }
    public function Role()
    {
        return $this->belongsToMany('App\Models\Role');
    }
    public function plant()
    {
        return $this->belongsToMany('App\Models\plant');
    }
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    

}
