@extends('layout')

@section('content')
  @if (Session::has('message'))
    <p class="welcome">{{ Session::get('message') }}</p>
  @endif

  <h>{{ auth()->user()->name }}</h>
  <h2>{{ auth()->user()->email }}</h2>
@endsection