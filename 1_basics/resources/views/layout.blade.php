<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title') - Blog</title>
</head>
<body>
  <header class="Header">
    <h1 class="Header-title">
      <a href="{{ route('home') }}">Laravel Basics</a>
    </h1>

    <nav class="Navigation">
      <ul class="Navigation-list">
        <li class="Navigation-item">
          <a href="{{ route('posts.create') }}" class="Navigation-link">Create a new post</a>
        </li>
      </ul>
    </nav>
  </header>

  <section class="Content">
    @yield('content')
  </section>

  <footer class="Footer">
    <h2>Footer comes here</h2>
  </footer>
</body>
</html>