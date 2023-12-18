<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
</head>
<body>
    <header>
        <h1>DC Comics</h1>
    </header>

    <div>
        @yield('content')
    </div>

    <footer>
    </footer>
</body>
</html>