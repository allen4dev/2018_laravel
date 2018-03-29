<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form method="POST" action="/posts">
    @csrf
    <div>
      <label>
        Title:
      </label>
        <input name="title" type="text" />
    </div>

    <div>
      <label>
        Body:
      </label>
        <textarea name="body" cols="30" rows="10"></textarea>
    </div>

    <button type="submit">Create post</button>
  </form>
</body>
</html>
