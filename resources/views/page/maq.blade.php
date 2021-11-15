<x-master-layout>

    <div class="relative py-16 bg-white">
        <div class="hidden absolute top-0 inset-x-0 h-1/2 bg-gray-50 lg:block" aria-hidden="true"></div>
        <div class="max-w-7xl mx-auto bg-cyan-600 lg:bg-transparent lg:px-8">
            <div class="lg:grid lg:grid-cols-12">
                <div class="relative z-10 lg:col-start-1 lg:row-start-1 lg:col-span-4 lg:py-16 lg:bg-transparent">
                    <div class="absolute inset-x-0 h-1/2 bg-gray-50 lg:hidden" aria-hidden="true"></div>
                    <div class="max-w-md mx-auto px-4 sm:max-w-3xl sm:px-6 lg:max-w-none lg:p-0">
                        <div class="aspect-w-10 aspect-h-6 sm:aspect-w-2 sm:aspect-h-1 lg:aspect-w-1">
                            <img class="object-cover object-center rounded-3xl shadow-2xl" src="https://images.unsplash.com/photo-1507207611509-ec012433ff52?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=934&q=80" alt="">
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
    <div class="bg-white">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Senior Staff</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Advisory board -->
    <div class="bg-white">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Advisory Board Members</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-cyan-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    </div>


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