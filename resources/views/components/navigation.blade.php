<div x-data="{show:false}">
    <div class=" md:flex justify-end px-12 py-4 hidden">
        <ul class="flex space-x-3">
            @foreach ($items[1]['menuItems'] as $menu)
            @if (count($menu['children']) > 0)
            <x-navigation-drop-down :menu="$menu" />
            @else
            @if ($menu['type'] === 'page-link')
            <a href="{{ $menu['data']['page']['path'] }}" class="font-medium text-gray-500 hover:text-gray-900 block">{{ $menu['name'] }}</a>
            @elseif($menu['type'] === 'static-url')
            <a href="{{ $menu['value'] }}" class="font-medium text-gray-500 hover:text-gray-900 block">{{ $menu['name'] }}</a>
            @endif
            @endif
            @endforeach
            {{-- <li>Black List</li>
            <li>Media</li>
            <li>Quick Link</li> --}}
        </ul>
    </div>
    <div class="md:flex justify-center w-full py-6 bg-[#cbe7d3] hidden items-center">
        <div class="w-12"><img src="/asset/emblem.svg" class="block" /></div>
        <div>
            <h1 class=" text-3xl font-bold px-5">Maldives Qualification Authority</h1>
        </div>
        <div class="w-12"><img src="/asset/mqa_logo.svg" class="block" /></div>
    </div>
    <nav class="relative max-w-7xl mx-auto flex items-center justify-between px-4 sm:px-6 py-4" aria-label="Global">
        <div class="flex items-center flex-1">
            <div class="flex items-center justify-between w-full md:w-auto">
                <a href="/">
                    <span class="sr-only">MQA</span>
                    <img class="h-8 w-auto sm:h-10 hidden sm:block" src="/asset/logo.svg" alt="">
                    <h2 class="sm:hidden font-semibold text-gray-800">Home</h2>
                </a>
                <div class="-mr-2 flex items-center md:hidden">
                    <button x-on:click="show=true" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hidden md:flex md:ml-10 md:space-x-10">
                @foreach ($items[0]['menuItems'] as $menu)
                @if (count($menu['children']) > 0)
                <x-navigation-drop-down :menu="$menu" />
                @else
                @if ($menu['type'] === 'page-link')
                <a href="{{ $menu['data']['page']['path'] }}" class="font-medium text-gray-500 hover:text-gray-900 block">{{ $menu['name'] }}</a>
                @elseif($menu['type'] === 'static-url')
                <a href="{{ $menu['value'] }}" class="font-medium text-gray-500 hover:text-gray-900 block">{{ $menu['name'] }}</a>
                @endif
                @endif
                @endforeach
            </div>
        </div>
        <!-- <div class="hidden md:block text-right">
            <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-gray-50">
                    Log in
                </a>
            </span>
        </div> -->
    </nav>

    <!--
        Mobile menu, show/hide based on menu open state.

        Entering: "duration-150 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="show" x-transition:enter="duration-150 ease-out" x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="duration-100 ease-in" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="px-5 pt-4 flex items-center justify-between">
                <div>
                    <img class="h-8 w-auto" src="/asset/logo.svg" alt="">
                </div>
                <div class="-mr-2">
                    <button type="button" x-on:click="show=false" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                        <span class="sr-only">Close main menu</span>
                        <!-- Heroicon name: outline/x -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="px-2 pt-2 pb-3 space-y-1">
                @foreach ($items[0]['menuItems'] as $menu)
                @if ($menu['type'] === 'page-link')
                <a href="{{ $menu['data']['page']['path'] }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">{{ $menu['name'] }}</a>
                @elseif($menu['type'] === 'static-url')
                <a href="{{ $menu['value'] }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">{{ $menu['name'] }}</a>
                @endif
                @endforeach

            </div>
            <div class="px-2 space-y-1 pb-4 border-t pt-2">
                @foreach ($items[1]['menuItems'] as $menu)
                @if (count($menu['children']) > 0)
                <x-navigation-drop-down :menu="$menu" />
                @else
                @if ($menu['type'] === 'page-link')

                <a href="{{ $menu['data']['page']['path'] }}" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">{{ $menu['name'] }}</a>
                @elseif($menu['type'] === 'static-url')
                <a href="{ $menu['value'] }}" class="block rounded-md py-2 px-3 text-base font-medium text-gray-500 hover:bg-gray-50 hover:text-gray-900">{{ $menu['name'] }}</a>
                @endif
                @endif
                @endforeach

            </div>

        </div>
    </div>
</div>