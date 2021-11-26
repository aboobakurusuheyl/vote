<div class="bg-white">
    <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
        <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
            <div class="space-y-5 sm:space-y-4">
                <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">{{$type->name}}</h2>
                <p class="text-xl text-gray-500">{{$type->description}}</p>
            </div>
            <div class="lg:col-span-2">
                <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                    @foreach($type->peoples as $people)
                    <li>
                        <x-people :people="$people" />
                    </li>
                    @endforeach



                    <!-- More people... -->
                </ul>
            </div>
        </div>
    </div>
</div>