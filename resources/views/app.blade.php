<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <x-styles />
</head>
<body>
    <div id="app">
        <header class="fixed top-0 left-0 z-50 flex items-center w-full h-16 text-white bg-black sm:h-24">
            @yield('header')
        </header>
        <nav id="aw-nav" class="bg-black">
            @yield('nav')
        </nav>
        <main>
            @yield('content')
        </main>
        <footer>
            @include('partials.footer')
        </footer>
    </div>
    <script src="/js/app.js"></script>
    <x-scripts />
</body>
</html>