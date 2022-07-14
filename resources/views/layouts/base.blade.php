lines (17 sloc) 392 Bytes
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Comics')</title>
</head>
<body>
    <header>
        @include('partials.header')
    </header>
    <main>
        @yield('page-content')
    </main>
</body>
</html>