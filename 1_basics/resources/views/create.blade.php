@extends('layout')

@section('title', 'Create Post')

@section('content')
  <form action="/posts" method="POST">
    @csrf
    <div>
      <input id="title" type="text" name="title" placeholder="Post title" />
    </div>
    <div>
      <textarea id="body" name="body" rows="10" placeholder="Post body"></textarea>
    </div>
    <div>
      <button type="submit">Create Post</button>
    </div>
  </form>
@endsection