<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    public function albums()
    {
        return $this->belongsToMany(Album::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
