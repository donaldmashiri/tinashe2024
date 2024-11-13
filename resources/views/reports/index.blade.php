<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-3 fw-bold"> {{ __("Dashboard Reports ") }}</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h5 style="background-color: saddlebrown" class="text-white card-header"> Users Reports</h5>
                                <table class="table w-full text-sm table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-2 py-1 text-left">Description</th>
                                        <th class="px-2 py-1 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Users Total</td>
                                        <td class="px-2 py-1">{{$userCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Lecturer</td>
                                        <td class="px-2 py-1">{{$lecturerCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Student</td>
                                        <td class="px-2 py-1">{{$studentCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>University</td>
                                        <td class="px-2 py-1">{{$universityCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h5 style="background-color: sandybrown" class="text-white card-header"> Content Uploads</h5>
                                <table class="table w-full table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="px-2 py-1 text-left">Description</th>
                                        <th class="px-2 py-1 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Content</td>
                                        <td class="px-2 py-1">{{$contentCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Feedbacks</td>
                                        <td class="px-2 py-1">{{$feedbackCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Comments</td>
                                        <td class="px-2 py-1">{{$commentsCount}}</td>
                                    </tr>
                                    <tr class="text-sm border-t">
                                        <td class="px-2 py-1"><i class="fas fa-star text-info"></i>Messaging</td>
                                        <td class="px-2 py-1">{{$messagesCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{-- <div class="mt-4 col-md-12">
                            <div class="card">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    @if($users->count() > 0)
                                        <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400 table-bordered">
                                            <thead  style="background-color: dodgerblue" class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-2 py-1">#</th>
                                                <th scope="col" class="px-2 py-1">User#</th>
                                                <th scope="col" class="px-2 py-1">Full Names</th>
                                                <th scope="col" class="px-2 py-1">Email</th>
                                                <th scope="col" class="px-2 py-1">Type</th>
                                                <th scope="col" class="px-2 py-1">Created On</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $user)
                                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                    <td class="px-2 py-1">{{$loop->iteration}}</td>
                                                    <td class="px-2 py-1">USR00{{$user->id}}</td>
                                                    <td class="px-2 py-1">{{$user->name}}</td>
                                                    <td class="px-2 py-1">{{$user->email}}</td>
                                                    <td class="px-2 py-1">{{$user->user_type}}</td>
                                                    <td class="px-2 py-1">{{$user->created_at}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    @else
                                        <h4 class="p-2 text-xl font-semibold leading-tight text-center text-white bg-red-600">No Users</h4>
                                    @endif
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
