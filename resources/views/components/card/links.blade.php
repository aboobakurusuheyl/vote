<li class="col-span-1 bg-white rounded-lg shadow divide-y divide-gray-200">
    <div class="w-full flex items-center justify-between p-6 space-x-6">
        <div class="flex-1 truncate">
            <div class="flex items-center space-x-3">
                <h3 class="text-gray-900 text-sm font-medium truncate">{{ $link->name }}</h3>
            </div>
            <p class="mt-1 text-gray-500 text-sm truncate">{{ $link->description }}</p>
        </div>
        <img class="w-10 h-10 rounded-full flex-shrink-0" src="{{ 'storage/' . $link->logo }}" alt="">
    </div>
    <div>
        <div class="-mt-px flex divide-x divide-gray-200">
            <div class="-ml-px w-0 flex-1 flex">
                <a href="tel:+1-202-555-0170"
                    class="relative w-0 flex-1 inline-flex items-center justify-center py-4 text-sm text-gray-700 font-medium border border-transparent rounded-br-lg hover:text-gray-500">
                    <!-- Heroicon name: solid/phone -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                    <span class="ml-3">Visit</span>
                </a>
            </div>
        </div>
    </div>
</li>
