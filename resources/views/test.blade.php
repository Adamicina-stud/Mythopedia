<!doctype html>
<html class="no-js" lang="sk">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mythopedia</title>
</head>
<body>
    <h1>Hello Word</h1>
    <form action="/" method="post">
        @csrf
        <input type="text" name="username" id="">
        <button type="submit">Submit</button>
    </form>
    <form action="/100" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="username" id="">
        <button type="submit">Submit PUT</button>
    </form>
    <form action="/1000" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Submit Delete</button>
    </form>
</body>

</html>
