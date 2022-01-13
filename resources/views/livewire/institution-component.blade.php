<div>
    <input wire:model="search" type="search" placeholder="Search...">
    <div class=" grid grid-cols-3 gap-6 pt-14">
        @foreach ($institutes as $institute)
            <x-card.college :institute="$institute" />
            </a>
        @endforeach

    </div>
</div>
