@extends('layout')

@section('content')
  <pre>
    {{ var_dump($threads->toArray()) }}
  </pre>
@endsection