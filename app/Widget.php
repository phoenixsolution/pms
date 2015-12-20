<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Widget extends Model
{
    protected $table='widgets';
     public function imageable()
    {
        return $this->morphTo();
    }
    
    public function posts(){
        return $this->belongsToMany('App\Post');
    }
    public function categories(){
        return $this->belongToMany('App\Category');
    }
}
