<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Discussions') }}
            <a href="{{route('discussions.create')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Add
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($discussions->count() > 0)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-bordered">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Topic</th>
                                <th scope="col" class="px-2 py-1">Comments</th>
                                <th scope="col" class="px-2 py-1">Created</th>
                                <th scope="col" class="px-2 py-1">Actions</th>
                                <th scope="col" class="px-2 py-1">By</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($discussions as $discussion)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-2 py-1">{{ $loop->iteration }}</td>
                                    <td class="px-2 py-1">{{ $discussion->topic }}</td>
                                    <td class="px-2 py-1">{{ $discussion->comment->count() }}</td>
                                    <td class="px-2 py-1">{{ $discussion->created_at }}</td>
                                    <td class="px-2 py-1">{{ $discussion->user->name }}</td>
                                    <td class="px-2 py-1">
                                        <a href="{{ route('discussions.show', $discussion->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">No Discussions Created</h4>
                    @endif


{{--                        <div class="card">--}}
{{--                            <div class="card-body">--}}
{{--                                <h4 class="fw-bold mb-2">Topic: What is ICT?</h4>--}}
{{--                                @foreach ($messages as $message)--}}
{{--                                    <div class="d-flex align-items-start mb-3 border border-r-amber-100 p-3">--}}
{{--                                        <div class="me-2">--}}


{{--                                        </div>--}}
{{--                                        <div>--}}
{{--                                            <div class="fw-bold">--}}
{{--                                                Donnie--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias--}}
{{--                                                    consequatur deleniti eaque eum neque possimus voluptatum? Dolore--}}
{{--                                                    facilis magni, optio quaerat repellat reprehenderit sed totam unde!--}}
{{--                                                    Aspernatur exercitationem inventore ullam?--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="text-muted" style="font-size: 0.8rem;">2days ago</div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
{{--                        </div>--}}

                </div>



            </div>
        </div>

    </div>
</x-app-layout>
