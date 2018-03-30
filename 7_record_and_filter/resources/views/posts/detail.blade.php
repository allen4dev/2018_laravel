@extends('layout')

@section('content')
  <h1>{{ $post->title }}</h1>
  <p>{{ $post->body }}</p>
  <hr />

  <ul>
    @forelse ($post->comments as $comment)
      <li>
        <div>
          <p>By {{ $comment->user->name }} <strong>{{ $comment->created_at->diffForHumans() }}</strong></p>
          <p>{{ $comment->body }}</p>
        </div>
        <div>
          <a href="{{ route('comments.edit', $comment) }}">Edit comment.</a>
        </div>
      </li>

      <hr />
    @empty
        <p>No comments for this post</p>
    @endforelse
  </ul>
@endsection