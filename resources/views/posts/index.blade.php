<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>
</head>
<body>
    <h1>Posts index Page</h1>
    <div>My name is {{ $username }} and my age is {{ $age }}</div>
    <ul>
        @foreach($posts as $post)
            <li>{{$post}}</li>
        @endforeach
    </ul>
</body>
</html>
