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
    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
        @foreach ($galleries as $gallery)

            <x-card.gallery :gallery="$gallery" />

        @endforeach

        <!-- More people... -->
    </div>


</x-master-layout>
