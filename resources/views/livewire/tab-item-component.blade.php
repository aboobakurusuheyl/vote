<div>
    <div class="hidden sm:block py-12   ">


        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
            <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
            @foreach($tabs as $key => $tab)
            <a href="#" wire:click="select({{$key}})" class="text-gray-900 rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10" aria-current="page">
                <span>{{$tab->name}}</span>
                <span aria-hidden="true" class="bg-indigo-500 absolute inset-x-0 bottom-0 h-0.5"></span>
            </a>

            @endforeach

        </nav>
    </div>
    @if(isset($selected->body))
    <div class="mt-6 prose prose-cyan prose-lg text-gray-500 mx-auto">
        {!! $selected->body !!}

    </div>
    @endif
</div>