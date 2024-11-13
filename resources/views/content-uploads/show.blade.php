<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Content Uploads') }}
            <a href="{{route('content-uploads.index')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>back
            </a>
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="w-full text-sm text-gray-500 dark:text-gray-400">
                    <table class="table table-striped table-bordered">
                        <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">Title</th>
                            <td class="px-2 py-1">{{$content->title}}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">Description</th>
                            <td class="px-2 py-1">{!! $content->description !!}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">Content Type</th>
                            <td class="px-2 py-1">{{$content->content_type}}</td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">File</th>
                            <td class="px-2 py-1">
                                <a href="{{ asset($content->file_path) }}" class="text-blue-600 dark:text-blue-500 hover:underline" target="_blank">Download</a>
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">Downloads</th>
                            <td class="px-2 py-1"><span class="badge bg-primary">5</span></td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th class="px-2 py-1">Views</th>
                            <td class="px-2 py-1"><span class="badge bg-warning">1</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

       <div class="container">
           <div class="row mt-4">
               <div class="card">
                   <div class="card-header">Feedbacks</div>
                   <div class="card-body">
                       @if($feedbacks->isEmpty())
                           <p class="text-danger text-center">No feedbacks this content.</p>
                       @else
                           @foreach($feedbacks as $feedback)
                               <div class="feedback-item bg-light d-flex align-items-center">
                                   @if ($feedback->user->user_type == 'lecturer')
                                       <img src="{{ asset('assets/images/lecturer.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                                   @else
                                       <img src="{{ asset('assets/images/student.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px; margin-right: 10px;">
                                   @endif
                                   <strong>{{ $feedback->user->name }}</strong>:
                                   <p class="mb-0" style="display: inline;">  {{ $feedback->feedback }}</p>
                                   <small class="text-muted float-right">{{ $feedback->created_at->diffForHumans() }}</small> <!-- Time ago -->
                               </div>
                               <hr>
                           @endforeach
                       @endif
                   </div>
               </div>
           </div>
       </div>

    </div>
</x-app-layout>
