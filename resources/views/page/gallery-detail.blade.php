<x-master-layout>
    <div class="relative px-4 sm:px-6 lg:px-8 pb-12">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                {{-- <span
                    class="block text-base text-center text-cyan-600 font-semibold tracking-wide uppercase">Galleries</span> --}}
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{$gallery->name}}</span>
            </h1>

        </div>
    </div>
 
    <ul role="list" class="grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        <li class="relative">
            <div
                class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                
                <img src="{{$gallery->getFirstMediaUrl('images')}}"
                    alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                </button>
            </div>
            <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
            <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
        </li>

        <li class="relative">
            <div
                class="group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-indigo-500 overflow-hidden">
                <img src="{{$gallery->getFirstMediaUrl('images')}}"
                    alt="" class="object-cover pointer-events-none group-hover:opacity-75">
                <button type="button" class="absolute inset-0 focus:outline-none">
                    <span class="sr-only">View details for IMG_4985.HEIC</span>
                </button>
            </div>
            <p class="mt-2 block text-sm font-medium text-gray-900 truncate pointer-events-none">IMG_4985.HEIC</p>
            <p class="block text-sm font-medium text-gray-500 pointer-events-none">3.9 MB</p>
        </li>

        <!-- More files... -->
    </ul>
</x-master-layout>
