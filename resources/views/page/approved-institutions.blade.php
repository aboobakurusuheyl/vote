<x-master-layout>
    <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-cyan-600 font-semibold tracking-wide uppercase">Approved instituion</span>
                <!-- <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Approved Local Courses</span> -->
            </h1>
        </div>

        <div class=" grid grid-cols-3 gap-6 pt-14">

            @foreach($institutes as $institute)
            <x-card.college :institute="$institute" />
            </a>
            @endforeach
        </div>
    </div>
</x-master-layout>