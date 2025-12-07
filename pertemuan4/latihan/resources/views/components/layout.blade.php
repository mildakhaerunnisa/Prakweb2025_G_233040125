<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f[]=satoshi@1&display=swap">
    {{-- Tambahkan slot baru dengan nama title --}}
    <title>{{$title}}</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body class="bg-grey-100">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-md">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-blue-600">
                    MyBlog
                </span>
            </a>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row 
                md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"class="block py-2 px-3 {{ request()->is('/') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Home</a>
                    </li>
                    <li>
                        <a href="/about" class="block py-2 px-3 {{ request()->is('about') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">About</a>
                    </li>
                    <li>
                        <a href="/blog" class="block py-2 px-3 {{ request()->is('blog') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Blog</a>
                    </li>
                    <li>
                        <a href="/posts"class="block py-2 px-3 {{ request()->is('posts*') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Posts</a>
                    </li>
                    <li>
                        <a href="/categories" class="block py-2 px-3 {{ request()->is('categories') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Categories</a>
                    </li>
                    <li>
                        <a href="/contact" class="block py-2 px-3 {{ request()->is('contact') ? 'text-blue-700' : 'text-gray-900' }} md:p-0">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    {{$slot}}
    <footer class="mt-16 bg-gray-900 text-gray-300 py-6">
    <div class="max-w-6xl mx-auto px-4">
        <p class="text-sm text-center">
            Copyright © 2025 - <span class="font-semibold text-white">Milda</span>. All rights reserved.
        </p>
    </div>
    </footer>
</body>

</html>