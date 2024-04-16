<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])  </head>
<body>
    @include('layouts.header')

    <main class="container mx-auto py-4">
        @yield('content')  </main>

    @include('layouts.footer')

    @vite('resources/js/app.js')  </body>
</html>