<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Document</title>
</head>
    <header class="w-full relative bg-white border-b shadow-xl border-gray-200">
        <x-container class="items-center my-0! w-full flex gap-8 py-5 mx-auto">
            <div class="">
                <a href="/">
                    <img class="w-30  h-10 bg-red-100" src="/" alt="logo" \>
                </a>
            </div>
            <x-button class="hidden lg:flex">
                Каталог
            </x-button>
            
            <div class=" hidden lg:flex max-w-full w-full">
                <x-input-form class="rounded-r-none border-r-0" placeholder="найти..." />
                 <x-button  class=" px-3 flex rounded-l-none">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M10.76 13.24C8.42 10.9 8.42 7.09999 10.76 4.74999C13.1 2.41 16.9 2.41 19.25 4.74999C21.59 7.08999 21.59 10.89 19.25 13.24C16.91 15.58 13.11 15.58 10.76 13.24Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 13.5L3 21" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </x-button>
            </div>
            
        
            
            
            
            <div class="flex items-center ml-auto gap-5">
                <menu class="hidden lg:block">
                    <ul class="flex text-xl font-semibold items-center gap-10">
                        <li><a  href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </menu>
                <x-button>
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 7C8 5.93913 8.42143 4.92172 9.17157 4.17157C9.92172 3.42143 10.9391 3 12 3C13.0609 3 14.0783 3.42143 14.8284 4.17157C15.5786 4.92172 16 5.93913 16 7C16 8.06087 15.5786 9.07828 14.8284 9.82843C14.0783 10.5786 13.0609 11 12 11C10.9391 11 9.92172 10.5786 9.17157 9.82843C8.42143 9.07828 8 8.06087 8 7ZM8 13C6.67392 13 5.40215 13.5268 4.46447 14.4645C3.52678 15.4021 3 16.6739 3 18C3 18.7956 3.31607 19.5587 3.87868 20.1213C4.44129 20.6839 5.20435 21 6 21H18C18.7956 21 19.5587 20.6839 20.1213 20.1213C20.6839 19.5587 21 18.7956 21 18C21 16.6739 20.4732 15.4021 19.5355 14.4645C18.5979 13.5268 17.3261 13 16 13H8Z" fill="white"/>
                    </svg>
                </x-button>
            </div>
        </x-container>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-emerald-900">
        <x-container class="my-0! grid text-white py-10 gap-5 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col items-center gap-5">
                <x-image class="max-h-20 max-w-100" width=200 height=50 />
                <p>ki dsgdflkg jdfjgdfkldsgdflkg jdfjgdfklgjdsgdflkg jdfjgdfklgjdsgdflkg jdfjgdfklgjdsgdflkg jdfjgdfklgjdsgdflkg jdfjgdfklgjdsgdflkg jdfjgdfklgjgj</p>
            </div>
            <div class="flex flex-col gap-3">
                <h2 class="text-2xl font-medium">Навигация</h2>
                <div class="flex flex-col gap-1">
                    <p>dsd</p>
                    <p>dsd</p>
                    <p>dsd</p>
                    <p>dsd</p>
                    <p>dsd</p>
                </div>
            </div>
            <div class="">ghfgfhfhff</div>
            <div class="flex flex-col gap-4">
                <p>Где нас найти:</p>
                <div class="h-50">
                    <iframe 
                    src="https://yandex.ru/map-widget/v1/?um=constructor%3A6722de5422049490b3fd4f48bf14ba0f7240d1d85ef69d52ca18e418568380fc&amp;source=constructor"
                    width="100%"
                    height="100%"
                    class="rounded-lg"
                    ></iframe>
                </div>
            </div>
        </x-container>
    </footer>
</body>
</html>