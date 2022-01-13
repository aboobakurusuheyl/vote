<div>

    <div class="mt-1 sm:mt-0 sm:col-span-2">
        <input wire:model="search" type="search" placeholder="Search..." type="text"
            class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
    </div>
    <div class=" grid grid-cols-3 gap-6 pt-14">
        @foreach ($institutes as $institute)
            <x-card.college :institute="$institute" />
            </a>
        @endforeach

    </div>
</div>
