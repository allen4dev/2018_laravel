@extends('layout')

@section('title', $post->title)

@section('content')
  <section class="Detail">
    <section class="Post">
      <h2 class="Post-title title">{{ $post->title }}</h2>
      <a href="#" class="Post-categoryLink">{{ $category->name }}</a>

      <p class="Post-body">{{ $post->body }}</p>
    </section>
  </section>

  <section class="CommentList">
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