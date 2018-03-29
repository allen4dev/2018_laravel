@extends('layout')

@section('content')
  <h1 class="title">Login</h1>
  <form class="Form" method="POST" action="/login">
    @csrf

    <div class="Form-group">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" />
    </div>

    <div class="Form-group">
      <label for="password">Password</label>
      <input id="password" name="password" type="password" />
    </div>


    <div class="Form-group">
      <button type="submit">Submit</button>
    </div>

    @if($errors->any())
      <ul class="ErrorList">
        @foreach($errors->all() as $error)
          <li class="ErrorList-item">{{ $error }}</li>
        @endforeach
      </ul>
    @endif
  </form>
@endsection