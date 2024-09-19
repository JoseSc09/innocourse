<!DOCTYPE html>
<html class="" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Admin </title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Contenedor Principal -->
    <div class="flex h-screen">

        <x-side-bar>
        </x-side-bar>

        {{ $slot }}
    </div>
</body>

</html>
