<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 12 - Basic</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">
    {{--
    <script src="https://cdn.tailwindcss.com"></script> --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50">
    <div class="bg-white border-b border-gray-100/90 shadow-xs">
        <nav class="container mx-auto p-5 flex justify-between items-center">
            <a href="/">
                LOGO
                {{-- <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt=""> --}}
            </a>

            <div class="space-x-6 font-bold">
                <a href="/blogs">Blogs</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </div>

            @auth
                <div class="space-x-6 font-bold flex">
                    <a href="/blogs/create">Create a Blog</a>

                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')

                        <button class="cursor-pointer">Log Out</button>
                    </form>
                </div>
            @endauth

            @guest
                <div class="space-x-6 font-bold">
                    <a href="/register">Sign Up</a>
                    <a href="/login">Log In</a>
                </div>
            @endguest
        </nav>
    </div>

    <main class="container mx-auto p-5">
        {{ $slot }}
    </main>

</body>

</html>