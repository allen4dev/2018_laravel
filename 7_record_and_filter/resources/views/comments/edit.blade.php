@extends('layout')

@section('content')
    <form action="">
      <div>
        <label>Body:</label>
        <div>
          <textarea name="body" rows="10" cols="20"></textarea>
        </div>
      </div>

      <button type="submit">Edit comment</button>
    </form>
@endsection