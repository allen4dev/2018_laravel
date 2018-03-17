<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home</title>
</head>
<body>
  <main class="App" role="application">
    <h1 class="title">Pagination</h1>
    <section class="PostList">
      @foreach ($posts as $post)
        <article class="Post">
          <h2 class="Post-title">{{ $post->title }}</h2>
          <p class="Post-body">{{ $post->body }}</p>
        </article>
        <hr>
      @endforeach
      <div class="pages">
        {{ $posts->links() }}
      </div>
    </section>
  </main>
</body>
</html>