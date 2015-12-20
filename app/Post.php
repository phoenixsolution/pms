<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';
    protected $fillable=[

    ];
    /**
     * gets all the categories bellonging to the posts
     * @return BelongToMany
     */
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
     public function widgets()
    {
        return $this->morphMany('App\Widget', 'imageable');
    }
}
    
    

