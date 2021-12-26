<x-master-layout>
    <div class="relative px-4 ">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <!-- <span class="block text-base text-center text-cyan-600 font-semibold tracking-wide uppercase">Download Page</span> -->
                <span class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">{{$data['data']['title']}}</span>
            </h1>

            <!-- <p class="mt-8 text-xl text-gray-500 leading-8">Today, the Maldivian post-secondary education sector is growing rapidly, with an increasing number of private providers entering the sector to meet the demand. Emerging from this growing importance of post-secondary education is the concomitant requirement to assure the quality of qualifications awarded in testimony of educational attainments. Thus, the Maldives National Qualifications Framework (MNQF) is designed to:</p> -->
        </div>
        <div class=" py-14">
            <livewire:file-group-component :type="$data" />
        </div>
    </div>
</x-master-layout>