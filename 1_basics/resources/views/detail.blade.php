@extends('layout')

@section('title', $post->title)

@section('content')
  <h2 class="Detail-title title">{{ $post->title }}</h2>

  <p class="Detail-title">{{ $post->body }}</p>

  <section class="CommentsList">
    @if (count($comments))
      @foreach ($comments as $comment)
        <div class="Comment">
          <p class="Comment-body">{{ $comment->body }}</p>
        </div>
        <hr>
      @endforeach
    @else
      <p class="text">No comments for this post.</p>
    @endif
  </section>
@endsection