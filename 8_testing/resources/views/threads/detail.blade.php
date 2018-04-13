@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="title">{{ $thread->title }}</h1>
    <p class="title">{{ $thread->body }}</p>
  </div>

  <div class="container">
    <form method="POST" action="/threads/{{ $thread->id }}/replies">
      @csrf
      <label>Body:</label>
      <div class="form-group">
        <textarea name="body" cols="30" rows="10"></textarea>
      </div>

      <div class="form-group">
        <button class="btn btn-primary" type="submit">Create Reply</button>
      </div>
    </form>
  </div>

  <div class="container">
    <ul class="list-group">
      @forelse ($thread->replies as $reply)
        <li class="list-group-item">
          <h2>By: {{ $reply->user->name }}</h2>
          <p>{{ $reply->body }}</p>
        </li>
      @empty
        <p><strong>No replies for this thread.</strong></p>
      @endforelse
    </ul>
  </div>
@endsection
