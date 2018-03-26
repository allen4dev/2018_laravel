@extends('layout')

@section('content')
  <pre>
    {{ var_dump(auth()->user()) }}
  </pre>
@endsection