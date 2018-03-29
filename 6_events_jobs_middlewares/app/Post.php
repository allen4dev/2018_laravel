<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function user(Type $var = null)
    {
        return $this->belongsTo(User::class);
    }
}
