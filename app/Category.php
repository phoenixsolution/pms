<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     *
     * @var database table name
     */
    protected $table    = 'categories';
    protected $fillable = [
        'title',
        'slug',
        'body',
        'excerpt'];

    /**
     *
     * @return array_collection
     */
    public function children()
    {
        return $this->hasMany($this, 'parent_id');
    }

    /**
     * 
     * @return collection
     */
    public function parents()
    {
        return $this->belongsTo($this, 'parent_id');
    }
    /**
     * gets all the posts associated with the category
     * @return BelongsToMany
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post');
    }
     public function widgets()
    {
        return $this->morphMany('App\Widget', 'imageable');
    }
}
