<x-master-layout>
    <div class="relative px-4 sm:px-6 lg:px-8 pb-12">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span
                    class="block text-base text-center text-cyan-600 font-semibold tracking-wide uppercase">Galleries</span>
                {{-- <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Approved
                    Local Courses</span> --}}
            </h1>

        </div>
    </div>
    {{-- <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        @foreach ($galleries as $gallery)

            <x-card.gallery :gallery="$gallery" />

        @endforeach
    </div> --}}

    <div class="min-h-screen  py-6 flex flex-col justify-center sm:py-12">
        <div class="flex justify-center space-x-24">
            @foreach ($galleries as $gallery)
                {{-- {{$gallery->getMedia('images')}} --}}
                <a href="/gallery-detail/{{ $gallery->id }}" class="focus:outline-none">
                    <div class="flex flex-col items-center space-y-5">
                        <div class="relative py-3 sm:max-w-xl sm:mx-auto h-64 w-56 group cursor-pointer">
                            {{-- @foreach ($gallery->getMedia('images') as $image) --}}
                            <img class="h-64 w-56 rounded-lg absolute shadow-md"
                                src="{{ $gallery->getMedia('images')[0]->getFullUrl() }}" alt="image">
                            <img class="h-64 w-56 rounded-lg absolute group-hover:rotate-[6deg] origin-bottom-right rotate-[2deg] transform ease-in-out  shadow-md transition-transform duration-150"
                                src="{{ $gallery->getMedia('images')[1]->getFullUrl() }}" />
                            <img class="h-64 w-56 rounded-lg absolute group-hover:rotate-[12deg] origin-bottom-right rotate-[4deg] transform ease-in-out  shadow-md transition-transform duration-150"
                                src="{{ $gallery->getMedia('images')[2]->getFullUrl() }}" />

                            {{-- @endforeach --}}
                        </div>
                        <div>
                            <h1 class="font-semibold text-gray-700">{{ $gallery->name }}</h1>
                            <small class="text-xs text-gray-300 block">{{ $gallery->description }}</small>
                        </div>
                    </div>
                </a>

            @endforeach
        </div>
    </div>


</x-master-layout>
