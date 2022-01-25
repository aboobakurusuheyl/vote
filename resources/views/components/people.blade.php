<div class="flex items-center space-x-4 lg:space-x-6">
    @if($people->image != null)
    <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="/storage/{{$people->image}}" alt="">
    @else
    <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="/asset/user.png" alt="">
    @endif
    <div class="font-medium text-lg leading-6 space-y-1">
        <h3>{{$people->name}}</h3>
        <p class="text-cyan-600 pt-2">{{$people->designation}}</p>
        <p class="text-cyan-600 pt-2">{{$people->organization}}</p>
        <p class="text-gray-400">{{$people->email}}</p>
        <p class="text-gray-400">{{$people->mobile}} - {{$people->mobile}}</p>
    </div>
</div>