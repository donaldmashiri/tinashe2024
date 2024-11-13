<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <i class="bi bi-newspaper"></i> {{ __('Content Uploads') }}
            <a href="{{route('content-uploads.create')}}"
               class="float-right px-4 py-2 text-sm font-semibold text-white bg-blue-600 border border-yellow-600 rounded-lg">
                <i class="bi bi-plus"></i>Add
            </a>
            <a href="{{ url('/content') }}" target="_blank"
               class="float-right px-4 py-2 text-sm font-semibold text-white bg-yellow-600 border border-yellow-600 rounded-lg">
                <i class="bi bi-pen"></i>Public View
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-3">
            <div class="overflow-hidden text-center bg-white shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($contents->count() > 0)
                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400 table-bordered">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Title</th>
                                <th scope="col" class="px-2 py-1">Description</th>
                                <th scope="col" class="px-2 py-1">Content Type</th>
                                <th scope="col" class="px-2 py-1">Feebacks</th>
{{--                                <th scope="col" class="px-2 py-1">File</th>--}}
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
                                    <td class="px-2 py-1">{{ $content->feedback->count() }}</td>
                                    <td class="px-2 py-1">
                                        <a href="{{ route('content-uploads.show', $content->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="p-2 text-xl font-semibold leading-tight text-center text-white bg-red-600">No Content Uploads Available</h4>
                    @endif

                   <div class="container ">
                    <div class="mt-3 row">
                       <p class="float-end"> {{$contents->links()}}</p>
                    </div>
                   </div>

                </div>

                <div class="mt-5 row">
                    <div class="card">
                        <div class="text-white card-header bg-primary">Recommendations</div>
                        <div class="card-body">
                            @php
                            // Shuffle contents and take a random selection
                            $randomContents = $contents->shuffle()->take(3); // Change 3 to however many random items you want
                        @endphp

                       <div class="row">
                        @foreach($randomContents as $content)
                        <div class="mb-3 col-md-4">
                            <div class="card">
                                <div class="card-header">{{ $content->title }}</div>
                                <div class="card-body">
                                    @php
                                    $randomNumber = rand(1, 5);
                                @endphp
                                <img src="assets/images/courses-{{ str_pad($randomNumber, 2, '0', STR_PAD_LEFT) }}.jpg" alt="Course #{{ $randomNumber + 1 }}">
                                    <p>{!! $content->description !!}</p>
                                    <p><strong>Content Type:</strong> {{ $content->content_type }}</p>
                                    <a href="{{ route('content-uploads.show', $content->id) }}" class="btn btn-primary btn-sm">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                       </div>

                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</x-app-layout>
