<div>
    <div>

        <!-- This example requires Tailwind CSS v2.0+ -->

        <nav class="flex" aria-label="Breadcrumb">
            <ol role="list" class="flex items-center space-x-4">
                <li>
                    <div class="flex items-center">

                        <a href="#" class=" text-sm font-medium text-gray-500 hover:text-gray-700">Approved</a>
                    </div>
                </li>

                <li>
                    <div class="flex items-center">
                        <!-- Heroicon name: solid/chevron-right -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="#" class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                            aria-current="page">{{ $institute->name }}</a>
                    </div>
                </li>
            </ol>
        </nav>

        <div class="py-3">
            <h1 class=" text-2xl font-semibold text-gray-700">{{ $institute->name }}</h1>
        </div>

        <div>
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" name="tabs"
                    class="block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm rounded-md">
                    <option>Level 1</option>

                    @foreach ($levels as $level)
                        <option {{ $current_level === $level->level ? 'selected' : '' }}>Level {{ $level->level }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                        @foreach ($levels as $level)
                            <a wire:click="selectLevel({{ $level->level }})"
                                class=" cursor-pointer {{ $current_level === $level->level ? 'border-cyan-500 text-cyan-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200' }}  whitespace-nowrap flex py-4 px-1 border-b-2 font-medium text-sm">
                                Level {{ $level->level }}
                                <span
                                    class="{{ $current_level === $level->level ? 'bg-cyan-100 text-cyan-600' : 'bg-gray-100 text-gray-900' }}  hidden ml-3 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block">{{ $level->total }}</span>
                            </a>
                        @endforeach


                    </nav>
                </div>
            </div>
        </div>


        <div class="flex flex-col py-10">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Course Name
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Credit
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Duration
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($courses as $course)
                                <x-card.course :course="$course" />
                            @endforeach

                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>

</div>
