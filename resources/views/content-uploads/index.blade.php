<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Content Uploads') }}
            <a href="{{route('content-uploads.create')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Add
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden  text-center shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($contents->count() > 0)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-bordered">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Title</th>
                                <th scope="col" class="px-2 py-1">Description</th>
                                <th scope="col" class="px-2 py-1">Content Type</th>
                                <th scope="col" class="px-2 py-1">File</th>
                                <th scope="col" class="px-2 py-1">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contents as $content)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-2 py-1">{{$loop->iteration}}</td>
                                    <td class="px-2 py-1">{{$content->title}}</td>
                                    <td class="px-2 py-1">{!! $content->description !!}</td>
                                    <td class="px-2 py-1">{{$content->content_type}}</td>
                                    <td class="px-2 py-1">
                                        <a href="{{asset('storage/'.$content->file_path)}}"  class="text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Download</a>
                                    </td>
                                    <td class="px-2 py-1">
                                        <a href="{{ route('content-uploads.show', $content->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">No Content Uploads Available</h4>
                    @endif
                </div>



            </div>
        </div>

    </div>
</x-app-layout>
