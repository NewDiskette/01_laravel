<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>

    <h1>This is posts page</h1>

    @foreach($posts as $post)
        <h2>{{ $post->title }}</h2>
        <div>{{ $post->content }}<div>
        <div>{{ $post->likes }}<div>
        <br>
    @endforeach

</body>
</html>
