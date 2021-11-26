<div class="flex items-center space-x-4 lg:space-x-6">
    <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://picsum.photos/id/{{$people->id}}/300/300" alt="">
    <div class="font-medium text-lg leading-6 space-y-1">
        <h3>{{$people->name}}</h3>
        <p class="text-cyan-600 pt-2">{{$people->designation}}</p>
        <p class="text-gray-400">{{$people->email}}</p>
    </div>
</div>