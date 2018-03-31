<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Filters\QueryFilters;

class Post extends Model
{
    public static function scopeFilter($query, QueryFilters $filters)
    {
        return $filters->apply($query);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
