<x-master-layout>
    <div>
        <div class="relative">

            <div class="max-w-7xl mx-auto ">
                <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden  min-h-[460px]">
                    @if(count($post->getMedia('feature_image'))>0)
                    <div class="absolute inset-0">
                        <img class="h-full w-full object-cover" src="{{$post->getMedia('feature_image')->first()->getFullUrl()}}" alt="People working on laptops">
                        <div class="absolute inset-0 bg-cyan-700 mix-blend-multiply"></div>
                    </div>
                    @endif
                    <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
                        <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
                            <span class="block text-white">{{$post->title}}</span>
                            <!-- <span class="block text-indigo-200">customer support</span> -->
                        </h1>
                        <!-- <p class="mt-6 max-w-lg mx-auto text-center text-xl text-indigo-200 sm:max-w-3xl">
                            Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
                        </p> -->

                    </div>
                </div>
                <div class=" flex items-center w-full justify-center">
                    <div class=" prose  prose-lg  t pt-16">
                        {!! $post->body !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-master-layout>