@extends('layout')

@section('title', 'Home')

@section('content')
  @if (count($posts))
    @foreach ($posts as $post)
      <article class="Post">
        <h2 class="Post-title">{{ $post->title }}</h2>
        <p class="Post-body">{{ $post->body }}</p>
      </article>
    @endforeach
  @else
    <p class="Home-message">
      No posts found
    </p>
  @endif
@endsection