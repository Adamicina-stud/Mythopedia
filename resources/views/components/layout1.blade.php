<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Mythopedia')</title>
    @vite('resources/css/my.css')
</head>

<body class="index">
<header>
    <div class="header-top">
        <h1>@yield('title', 'Mythopedia')</h1>
        <p>@yield('description', 'Mýty všetkých kútov sveta')</p>
    </div>
    <x-navBar/>
</header>

<main>
    {{ $slot }}
</main>

<footer>
    <p>&copy; 2024 Mythopedia</p>
</footer>
</body>
</html>
