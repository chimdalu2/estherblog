<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>My Laravel App</h1>
    <nav>
        <a href="/post">home</a>
        <a href="/contact">about</a>
    </nav>
    </header>
    <main>
        @yield('content')
    </main>

<footer>
    &copy; 2025.
</footer>
</body>
</html>