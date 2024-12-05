<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @vite('resources/css/my.css')
    @vite('resources/js/StickyNavbar.js')
</head>

<body class="@yield('body-class','index')">
<header>
    <div class="header-top">
        <h1>@yield('title')</h1>
        <p>@yield('description')</p>
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
