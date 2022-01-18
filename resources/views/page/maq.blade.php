<x-master-layout>

    <div class="relative py-16 bg-white">
        <div class="hidden absolute top-0 inset-x-0 h-1/2 bg-gray-50 lg:block" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto bg-cyan-600 lg:bg-transparent lg:px-8">
            <div class="lg:grid lg:grid-cols-12">
                <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
                    <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
                    <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
                            <img class="object-cover object-center rounded-3xl shadow-2xl" src="/asset/logo.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="relative bg-cyan-600 lg:col-start-3 lg:row-start-1 lg:col-span-10 lg:rounded-3xl lg:grid lg:grid-cols-10 lg:items-center">
                    <div class="hidden absolute inset-0 overflow-hidden rounded-3xl lg:block" aria-hidden="true">
                        <svg class="absolute bottom-full left-full transform translate-y-1/3 -translate-x-2/3 xl:bottom-auto xl:top-0 xl:translate-y-0" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-cyan-500" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                        <svg class="absolute top-full transform -translate-y-1/3 -translate-x-1/3 xl:-translate-y-1/2" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
                            <defs>
                                <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                                    <rect x="0" y="0" width="4" height="4" class="text-cyan-500" fill="currentColor" />
                                </pattern>
                            </defs>
                            <rect width="404" height="384" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
                        </svg>
                    </div>
                    <div class="relative max-w-md mx-auto py-12 px-4 space-y-6 sm:max-w-3xl sm:py-16 sm:px-6 lg:max-w-none lg:p-0 lg:col-start-4 lg:col-span-6">
                        <h2 class="text-3xl font-extrabold text-white" id="join-heading">{{$data["data"]["title"]}}</h2>
                        <div class=" prose prose-lg text-white">
                            {!! $data["data"]["about_mqa"] !!}
                        </div>
                        <!-- <p class="text-lg text-white">Maldives Accreditation Board (MAB) was created by a Presidential Decree in 14th August 2000 and renamed as Maldives Qualifications Authority (MQA) on 17th May 2010.
                        </p>
                        <p class="text-lg text-white">MQA's mandate is to assure the quality of post-secondary qualifications awarded in testimony of educational attainments. Thus a framework was developed in 2001. It is called Maldives National Qualifications Framework (MNQF).</p> -->

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=" space-y-10">
        <div class=" flex flex-col items-center">
            <h1 class=" font-bold text-3xl pb-4">Vission</h1>
            <p class=" text-gray-400">{{$data["data"]["vission"]}}</p>
        </div>

        <div class=" flex flex-col items-center">
            <h1 class=" font-bold text-3xl pb-4">Mission</h1>
            <p class=" text-gray-400">{{$data["data"]["mission"]}}</p>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    @foreach($data['data']['peopletypes'] as $peopleType)
    <x-people-type :type="$peopleType" />
    @endforeach

    <!-- Advisory board -->



    <div class=" space-y-10">
        <div class=" flex flex-col items-center">
            <h1 class=" font-bold text-3xl pb-4">Contact Us</h1>
            <div class=" text-center text-gray-400">
                {!! $data["data"]["contact_us"] !!}
            </div>
            <!-- <p class=" text-gray-400">Maldives Qualifications Authority</p>
            <p class=" text-gray-400">4th Floor, Ma. Fen Building </p>
            <p class=" text-gray-400">Ameenee Magu, Male’</p>
            <p class=" text-gray-400">Phone: +(960) 3026665, +(960) 3026667</p>
            <p class=" text-gray-400">Email: info@mqa.gov.mv</p> -->
        </div>


    </div>


</x-master-layout>