<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  class="h-full bg-gray-100">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Vote</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <!-- Styles -->
    {{-- @livewireStyles --}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


</head>

<body class="antialiased font-sans h-full">
    <div class="relative  overflow-hidden">
        <div class="relative">

            <main class="mt-16 mx-auto max-w-7xl px-4 sm:mt-24 sm:px-6 lg:mt-8">
                {{ $slot }}
            </main>

        </div>
    </div>
    <!-- javascript -->
</body>
@livewireScripts
<!-- <script defer src="{{ mix('js/app.js') }}"></script> -->

</html>
