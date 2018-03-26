@extends('layout')

@section('content')
  <h1 class="title">Register</h1>
  <form class="Form" method="POST" action-"/register">
    @csrf
    <div class="Form-group">
      <label for="name">Name</label>
      <input id="name" name="name" type="text" />
    </div>

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

    @if($errors->count())
    <ul class="ErrorList">
      @foreach($errors->all() as $error)
        <li class="ErrorList-item">{{ $error }}</li>
      @endforeach
    </ul>
    @endif
  </form>
@endsection