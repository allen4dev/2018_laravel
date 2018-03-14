@extends('layout')

@section('title', $post->title)

@section('content')
  <section class="Detail">
    <section class="Post">
      <h2 class="Post-title title">{{ $post->title }}</h2>
      <a href="#" class="Post-categoryLink">{{ $post->category->name }}</a>

      <p class="Post-body">{{ $post->body }}</p>
    </section>
  </section>

  <form method="POST" action="/posts/{{ $post->id }}/comments">
    @csrf
    <div>
      <textarea type="text" name="body"></textarea>
      <button type="submit">Submit</button>
    </div>
  </form>

  <div>
    @if($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
  </div>

  <section class="CommentList">
    @if (count($post->comments))
      @foreach ($post->comments as $comment)
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