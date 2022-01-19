<a href="/approved-institutions/{{ $institute->id }}"
    class=" border-2 rounded-md  p-10 space-y-6 hover:border-blue-600 hover:border-2  cursor-pointer col-span-3 sm:col-span-1">
    <div class=" flex flex-col items-center">
        @if ($institute->logo != null)
        <img class=" h-24" src="/storage/{{$institute->logo}}" />
        @else
            <img class=" h-24" src="/asset/university.png" />
        @endif

        <h1 class=" font-semibold text-sm">{{ $institute->name }}</h1>
    </div>
</a>
