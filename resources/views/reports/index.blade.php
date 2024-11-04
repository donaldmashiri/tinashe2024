<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Feedbacks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden  text-center shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($feedbacks->count() > 0)
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-bordered">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Content#</th>
                                <th scope="col" class="px-2 py-1">Feedback</th>
                                <th scope="col" class="px-2 py-1">User</th>
                                <th scope="col" class="px-2 py-1">Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feedbacks as $feedback)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-2 py-1">{{$loop->iteration}}</td>
                                    <td class="px-2 py-1">{{$feedback->content_upload_id}}</td>
                                    <td class="px-2 py-1">{{$feedback->feedback}}</td>
                                    <td class="px-2 py-1">{{$feedback->user->name}}</td>
                                    <td class="px-2 py-1">{{$feedback->created_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">No Feedbacks</h4>
                    @endif
                </div>



            </div>
        </div>

    </div>
</x-app-layout>
