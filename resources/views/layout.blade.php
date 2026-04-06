<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
    <header class="w-full relative bg-amber-50 border-b shadow-xl border-orange-100">
        <x-container class="items-center justify-between flex py-5 mx-auto">
            <div class="">
                <a href="/">
                    <img class="w-30 h-10 bg-red-100" src="/" alt="logo" \>
                </a>
            </div>
            
            <menu class="">
                <ul class="flex text-xl font-semibold items-center gap-10">
                    <li><a  href="/">Home</a></li>
                    <li><a href="/about">About</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </menu>
        </x-container>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>