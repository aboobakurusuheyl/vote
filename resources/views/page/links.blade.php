<x-master-layout>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-cyan-600 font-semibold tracking-wide uppercase">Quick Links</span>
                <!-- <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Approved Local Courses</span> -->
            </h1>
        </div>

        <div class="mt-10">
            <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach($links as $link)
                    <x-card.links :link="$link" />
                    </a>
                    @endforeach
            </ul>
        </div>
    </div>
    <!-- This example requires Tailwind CSS v2.0+ -->
    

</x-master-layout>
