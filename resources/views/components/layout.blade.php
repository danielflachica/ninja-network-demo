<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network</title>
    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav>
            <a href="/">
                <h1>Ninja Network</h1>
            </a>
            <div>
                <a href="{{ route('ninjas.index') }}">All Ninjas</a>
                <a href="{{ route('ninjas.create') }}">Create New Ninja</a>
            </div>
        </nav>
    </header>

    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>