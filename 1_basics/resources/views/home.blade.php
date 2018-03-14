@extends('layout')

@section('title', 'Home')

@section('content')
  <h2 class="title">All Posts</h2>
  <section class="PostList">
    @if (count($posts))
      @foreach ($posts as $post)
        <article class="Post">
          <h3 class="Post-title">
            <a href="{{route('posts.detail', $post)}}">{{ $post->title }}</a>
          </h3>
          <span>{{ $post->created_at }}</span>
          <p class="Post-body">{{ $post->body }}</p>
        </article>
        <hr>
      @endforeach
    @else
      <p class="Home-message">
        No posts found
      </p>
    @endif
  </section>
@endsection