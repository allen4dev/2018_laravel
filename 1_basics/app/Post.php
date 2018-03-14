<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

use App\Comment;

class Post extends Model
{
  protected $fillable = [
    'title', 'body', 'user_id', 'category_id'
  ];

  public function comments() {
    return $this->hasMany(Comment::class);
  }

  public function category() {
    return $this->belongsTo(Category::class);
  }

  public function addComment(Request $request)
    {
        $request->validate([
            'body' => 'required|max:200'
        ]);

        $comment = new Comment;
        $comment->body = $request->body;
        // hardcoded unitil authentication
        $comment->user_id = 76;


        $this->comments()->save($comment);
    }
}
