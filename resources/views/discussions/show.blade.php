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
                   <div class="row">
                       <div class="col-md-3">
                           <div class="card">
                               <div class="card-body">
                                   <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-bordered">
                                       <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                       <tr>
                                           <th scope="col" class="px-2 py-1">#</th>
                                           <th scope="col" class="px-2 py-1">Details</th>
                                       </tr>
                                       </thead>
                                       <tbody>
                                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                           <td class="px-2 py-1 font-bold">#:</td>
                                           <td class="px-2 py-1">DIS00{{ $discussion->id }}</td>
                                       </tr>
                                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                           <td class="px-2 py-1 font-bold">Topic:</td>
                                           <td class="px-2 py-1">{{ $discussion->topic }}</td>
                                       </tr>
                                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                           <td class="px-2 py-1 font-bold">Created:</td>
                                           <td class="px-2 py-1">{{ $discussion->created_at }}</td>
                                       </tr>
                                       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                           <td class="px-2 py-1 font-bold">By:</td>
                                           <td class="px-2 py-1">{{ $discussion->user->name }}</td>
                                       </tr>

                                       <tr>
                                           <td colspan="2" class="border-b border-gray-200"></td> <!-- Optional separator -->
                                       </tr>
                                       </tbody>
                                   </table>
                               </div>
                           </div>
                       </div>
                       <div class="col-md-9">
                            <div class="card">

                                <form action="{{ route('comments.store') }}" method="POST">
                                    @csrf
                                    <div class="p-6 text-gray-900">
                                        <div class="row">
                                            <div class="col-md-9 form-group">
                                                <input type="hidden" name="discussion_id" value="{{ $discussion->id }}">
                                                <div class="p-2">
                                                    <input type="text" class="form-control" name="comment" placeholder="Comment here..." required>
                                                    <button type="submit" class="float-right mt-3 btn btn-primary text-dark btn-sm">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <div class="card-header">Comments</div>

                                <div class="card-body">
                                    @if($comments->isEmpty())
                                        <p>No comments yet.</p>
                                    @else
                                        @foreach($comments as $comment)
                                            <div class="d-flex mb-3">
                                                <img src="{{ asset('assets/images/student.png') }}" alt="User Image" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 15px;">
                                                <div>
                                                    <h6 class="mb-1 fw-bolder">{{ $comment->user->name }}</h6>
                                                    <p class="mb-1 bg-light">{{ $comment->comment }}</p>
                                                    <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                                                </div>
                                            </div>
                                            <hr>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                       </div>
                   </div>

                </div>



            </div>
        </div>

    </div>
</x-app-layout>
