<x-master-layout>
    <!-- <div class="relative px-4 sm:px-6 lg:px-8">
        <div class="text-lg max-w-prose mx-auto">
            <h1>
                <span class="block text-base text-center text-indigo-600 font-semibold tracking-wide uppercase">{{$data['data']['title']}}</span>

            </h1>
        </div>
    </div> -->

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="relative bg-gray-50  pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
        <div class="absolute inset-0">
            <div class="bg-white h-1/3 sm:h-2/3"></div>
        </div>
        <div class="relative max-w-7xl mx-auto">
            <div class="text-center pb-12">
                <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                    {{$data['data']['title']}}
                </h2>
                @if(isset($data['data']['description']))
                <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
                    {{$data['data']['description']}}
                </p>
                @endif
            </div>
            <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
                @foreach($posts as $post)
                <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
                    @if($post->getMedia('feature_image')->first())
                    <div class="flex-shrink-0">
                        <img class="h-48 w-full object-cover" src="{{$post->getMedia('feature_image')->first()->getFullUrl()}}" alt="">
                    </div>
                    @endif
                    <div class="flex-1 bg-white p-6 flex flex-col justify-between">
                        <div class="flex-1">
                            <!-- <p class="text-sm font-medium text-indigo-600">
                                <a href="#" class="hover:underline">
                                    Case Study
                                </a>
                            </p> -->
                            <a href="/{{$data['slug']}}/{{$post->id}}" class="block mt-2">
                                <p class="text-xl font-semibold text-gray-900">
                                    {{$post->title}}
                                </p>
                                <p class="mt-3 text-base text-gray-500">
                                    {{$post->description}}
                                </p>
                            </a>
                        </div>
                        <div class="mt-6 flex items-center">
                            <!-- <div class="flex-shrink-0">
                                <a href="#">
                                    <span class="sr-only">Daniela Metz</span>
                                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1487412720507-e7ab37603c6f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                </a>
                            </div> -->
                            <div class="">
                                <!-- <p class="text-sm font-medium text-gray-900">
                                    <a href="#" class="hover:underline">
                                        Daniela Metz
                                    </a>
                                </p> -->
                                <div class="flex space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-02-12">
                                        Feb 12, 2020
                                    </time>
                                    <!-- <span aria-hidden="true">
                                        &middot;
                                    </span> -->
                                    <!-- <span>
                                        11 min read
                                    </span> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</x-master-layout>