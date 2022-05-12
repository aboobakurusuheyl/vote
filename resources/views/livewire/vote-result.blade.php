<div class="max-w-7xl mx-auto py-8 px-4 ">
    <div class="text-center">
      <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">Staff Vote</h2>
      <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Result</p>
     </div>
  </div>
<div class="grid grid-cols-2 gap-4">

    <div class="bg-white p-6 rounded-lg shadow">
        <h2 class="text-base font-semibold text-center tracking-wide uppercase">Female</h2>
        <div class="flow-root mt-6">
          <ul role="list" class="-my-5 divide-y divide-gray-200">
              @foreach($femaleResults as $staff)
            <li class="py-4">
              <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="flex-1 min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">{{$staff->name}}</p>
                </div>
                <div>
                  <a href="#" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">{{$staff->count}} </a>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    <!-- ... -->
    <div class="bg-white p-6 rounded-lg shadow">

        <h2 class="text-base font-semibold text-center tracking-wide uppercase">Male</h2>
        <div class="flow-root mt-6">
          <ul role="list" class="-my-5 divide-y divide-gray-200">
            @foreach($maleResults as $staff)
            <li class="py-4">
              <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                  <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519345182560-3f2917c472ef?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="flex-1 min-w-0">
                  <p class="text-sm font-medium text-gray-900 truncate">{{$staff->name}}</p>
                </div>
                <div>
                  <a href="#" class="inline-flex items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">{{$staff->count}} </a>
                </div>
              </div>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
