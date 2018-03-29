<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Validation, Authentication and Flash messaging</title>

  <style>
    .welcome {
        border: 2px solid black;
        border-radius: 5px;
        background-color: #bada55;
        color: 'white';
        padding: 4px;
    }
  </style>
</head>
<body>
  @if (Route::has('login'))
      <div class="top-right links">
          @auth
              <a href="{{ url('/') }}">Home</a>
              <a href="/logout">Logout</a>
          @else
              <a href="{{ route('login') }}">Login</a>
              <a href="{{ route('register.create') }}">Register</a>
          @endauth
      </div>
  @endif


  @yield('content')
</body>
</html>