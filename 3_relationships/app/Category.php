<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // One to Many (Category - Song)
    // public function songs()
    // {
    //     return $this->hasMany(Song::class);
    // }

    // hasManyThrough (Category - Artist - Song)
    // public function songs()
    // {
    //     return $this->hasManyThrough(Song::class, Artist::class);
    // }

    // Many to Many Polymorphic relationship
    public function songs()
    {
        return $this->morphedByMany(Song::class, 'categorizable');
    }

    public function videos()
    {
        return $this->morphedByMany(Video::class, 'categorizable');
    }
}
