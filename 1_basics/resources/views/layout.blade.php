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
    <h1 class="Header-title">Laravel Basics</h1>
  </header>

  <section class="Content">
    @yield('content')
  </section>

  <footer class="Footer">
    <h2>Footer comes here</h2>
  </footer>
</body>
</html>