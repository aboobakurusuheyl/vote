<div>
    @if($type=="male")
    <div class="mb-8">
        <div class="max-w-7xl mx-auto py-8 px-4 ">
          <div class="text-center">
            <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Staff Vote</h2>
            <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Best Dress Male</p>
           </div>
        </div>
      </div>
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($maleStaffs as $staff)
        <li wire:click="selectStaff({{ $staff }},'male')" class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-lg" src="{{$staff->avatarUrl()}}" alt="{{$staff->name}}">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$staff->name}}</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dd class="text-gray-500 text-sm">{{$staff->mobile}}</dd>
            </dl>
          </div>
        </li>
        @endforeach

      </ul>
      @elseif($type=="female")
      <div class="mb-8">
          <div class="max-w-7xl mx-auto py-8 px-4 ">
            <div class="text-center">
              <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Staff Vote</h2>
              <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Best Dress Female</p>
             </div>
          </div>
        </div>
      <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($femaleStaffs as $staff)
        <li wire:click="selectStaff({{ $staff }},'female')" class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
          <div class="flex-1 flex flex-col p-8">
            <img class="w-32 h-32 flex-shrink-0 mx-auto rounded-lg" src="{{$staff->avatarUrl()}}" alt="{{$staff->name}}">
            <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$staff->name}}</h3>
            <dl class="mt-1 flex-grow flex flex-col justify-between">
              <dd class="text-gray-500 text-sm">{{$staff->mobile}}</dd>
            </dl>
          </div>
        </li>
        @endforeach
        </ul>
        @else

    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
          <img class="mx-auto h-12 w-auto" src="{{url('/logo.svg')}}" alt="Pension">

        </div>

        <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
          <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">


            <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                <span class="block text-center">Already Voted</span>
              </h2>
              <div class="mt-8 flex justify-center">
                @can('viewResult')
                <div class="inline-flex rounded-md shadow">
                    <a href="/results" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700"> View Results </a>
                  </div>
                @endcan

              </div>

          </div>
        </div>
      </div>
        @endif


        @if(!is_null($selectedMaleStaff))
        <x-jet-confirmation-modal wire:model.defer="confirmingMaleVote">
            <x-slot name="title">
                Vote Staff
            </x-slot>

            <x-slot name="content">
                Are you sure you want to vote for <b>{{$selectedMaleStaff['name']}}</b>?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('confirmingMaleVote', false)" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="voteMale" wire:loading.attr="disabled">
                    Confirm
                </x-jet-button>
            </x-slot>
        </x-jet-confirmation-modal>
        @endif
        @if(!is_null($selectedFemaleStaff))
        <x-jet-confirmation-modal wire:model.defer="confirmingFemaleVote">
            <x-slot name="title">
                Vote Staff
            </x-slot>

            <x-slot name="content">
                Are you sure you want to vote for <b>{{$selectedFemaleStaff['name']}}</b>?
            </x-slot>

            <x-slot name="footer">
                <x-jet-secondary-button wire:click="$set('confirmingFemaleVote', false)" wire:loading.attr="disabled">
                    Nevermind
                </x-jet-secondary-button>

                <x-jet-button class="ml-2" wire:click="voteFemale" wire:loading.attr="disabled">
                    Confirm
                </x-jet-button>
            </x-slot>
        </x-jet-confirmation-modal>
        @endif
</div>
