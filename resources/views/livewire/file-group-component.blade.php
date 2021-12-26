<div class="grid grid-cols-7 gap-4">
    <!-- This example requires Tailwind CSS v2.0+ -->
    <nav class="space-y-1 col-span-2" aria-label="Sidebar">
        <!-- Current: "bg-gray-100 text-gray-900", Default: "text-gray-600 hover:bg-gray-50 hover:text-gray-900" -->
        @foreach($type['filegroup'] as $group)
        <button wire:click="select({{$group['id']}})" class=" {{$selected_id === $group['id'] ? 'bg-gray-100 text-gray-900' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}   flex items-center px-3 py-2 text-sm font-medium rounded-md w-full">
            <span class="truncate">
                {{$group['name']}}
            </span>
        </button>
        @endforeach
    </nav>
    <div class=" col-span-5">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>

                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date
                        </th>
                        <th scope="col" class="relative px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($files as $file)
                    <tr>

                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$file->title}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{$file->created_at}}
                        </td>

                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            @if(count($file->getMedia('attachment'))>0)
                            <a href="{{$file->getMedia('attachment')->first()->getFullUrl()}}" class="text-cyan-600 hover:text-cyan-900">Download</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                    <!-- More people... -->
                </tbody>
            </table>
        </div>
    </div>

</div>