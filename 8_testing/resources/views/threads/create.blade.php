@extends('layout')

@section('content')
    <form method="POST" action="/threads">
      @csrf

      <div>
        <div>
          <label>Title:</label>
        </div>
        <div>
          <input type="text" name="title" />
        </div>
      </div>

      <div>
        <div>
          <label>Body:</label>
        </div>
        <div>
          <textarea name="body" cols="30" rows="10"></textarea>
        </div>
      </div>

      <div>
        <button type="submit">Create thread</button>
      </div>
    </form>
@endsection