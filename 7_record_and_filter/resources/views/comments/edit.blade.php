@extends('layout')

@section('content')
    <form method="POST" action="/comments/{{$comment->id}}/edit">
      @csrf
      <input type="hidden" name="_method" value="PUT">

      <div>
        <label>Body:</label>
        <div>
          <textarea name="body" rows="10" cols="20">{{ $comment->body }}</textarea>
        </div>
      </div>

      <button type="submit">Edit comment</button>
    </form>
@endsection