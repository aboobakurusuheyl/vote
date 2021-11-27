<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative" x-data="{open:false}">
    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
    <button type="button" x-on:click="open=true" @click.outside="open = false" class="text-gray-500 group bg-white rounded-md inline-flex items-center text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" aria-expanded="false">
        <span>{{$menu['name']}}</span>
        <!--
      Heroicon name: solid/chevron-down

      Item active: "text-gray-600", Item inactive: "text-gray-400"
    -->
        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>

    <!--
    Flyout menu, show/hide based on flyout menu state.

    Entering: "transition ease-out duration-200"
      From: "opacity-0 translate-y-1"
      To: "opacity-100 translate-y-0"
    Leaving: "transition ease-in duration-150"
      From: "opacity-100 translate-y-0"
      To: "opacity-0 translate-y-1"
  -->
    <div class="absolute z-20 left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-xs sm:px-0" x-show="open" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">
                @foreach($menu['children'] as $child)
                @if($child['type'] === 'page-link')


                <a href="{{$child['data']['page']['path']}}" class="-m-3 p-3 block rounded-md hover:bg-gray-50 transition ease-in-out duration-150">
                    <p class="text-base font-medium text-gray-900">
                        {{$child['name']}}
                    </p>
                    <!-- <p class="mt-1 text-sm text-gray-500">
                        Learn about tips, product updates and company culture.
                    </p> -->
                </a>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>