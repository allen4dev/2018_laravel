<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function scopeFilter($query, $filters)
    {
        return $filters->apply($query);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
