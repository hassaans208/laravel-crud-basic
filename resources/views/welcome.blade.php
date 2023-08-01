<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


</head>

<body class="antialiased">
    <header class="bg-black w-full h-16">
        <div class="flex items-center gap-x-2 h-full mx-4">
            <a href="{{ route('users.index') }}">
                <button class="text-black bg-white px-10 py-2 hover:bg-gray-200">Users</button>
            </a>
            <a href="{{ route('products.index') }}">
                <button class="text-black bg-white px-10 py-2 hover:bg-gray-200">Products</button>
            </a>
        </div>
    </header>

    <div class="mx-2 flex justify-center">
        <p class="text-xl font-bold mt-10">Hello Dear Viewer You are in
            <code class="bg-gray-200 px-4 py-2">
                ./resources/views/welcome.blade.php
            </code>
        </p>
    </div>
    <div class="mx-2 flex justify-center">
        <p class="text-xl font-bold mt-10">Please Checkout Following Files
            <code class="bg-gray-200 px-4 py-2">
                ./routes/web.php
            </code>,
            <code class="bg-gray-200 px-4 py-2">
                ./resources/views/users/index.blade.php
            </code>,
            <code class="bg-gray-200 px-4 py-2">
                ./resources/views/products/index.blade.php
            </code> & 
            <code class="bg-gray-200 px-4 py-2">
                ./app/http/controllers/**.php 
            </code>
            (all controllers)
        </p>
    </div>
</body>

</html>
