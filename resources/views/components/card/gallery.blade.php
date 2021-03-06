<div
    class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
    <div class="flex-shrink-0">
        {{-- <img class="h-10 w-10 rounded-full" src="/asset/image-gallery.png" alt=""> --}}
        <img class="h-10 w-10 rounded-full" src="{{$gallery->getFirstMediaUrl('images')}}" height="">
    </div>
    <div class="flex-1 min-w-0">
        <a href="/gallery-detail/{{$gallery->id}}" class="focus:outline-none">
            <span class="absolute inset-0" aria-hidden="true"></span>
            <p class="text-sm font-medium text-gray-900">
                {{ $gallery->name }}
            </p>
            <p class="text-sm text-gray-500 truncate">
                {{ $gallery->description }}
            </p>
        </a>
    </div>
</div>
