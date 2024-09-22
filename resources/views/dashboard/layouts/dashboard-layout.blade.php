<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin </title>

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 dark:bg-slate-700">

    <!-- Contenedor Principal -->
    <x-side-bar>
    </x-side-bar>
    <div class="p-4 sm:ml-64 pt-20">
        {{ $slot }}
    </div>
    @vite('resources/js/admin.js')
</body>

</html>
