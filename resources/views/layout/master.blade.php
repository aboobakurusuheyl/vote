<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MQA Website</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>

<body class="antialiased font-sans">
    <div class="relative bg-white overflow-hidden">
        <div class="relative pt-6 ">
            <x-navigation />

            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-32">
                {{$slot}}
            </main>
            <x-footer />
        </div>
    </div>
    <!-- javascript -->



</body>
<script defer src="{{ mix('js/app.js') }}"></script>

</html>