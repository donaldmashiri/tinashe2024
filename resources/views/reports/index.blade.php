<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="fw-bold mb-3"> {{ __("Dashboard Reports ") }}</h1>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <h5 style="background-color: saddlebrown" class="card-header text-white"> Users Reports</h5>
                                <table class="w-full text-sm table table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-1 px-2 text-left">Description</th>
                                        <th class="py-1 px-2 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Users Total</td>
                                        <td class="py-1 px-2">{{$userCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Lecturer</td>
                                        <td class="py-1 px-2">{{$lecturerCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Student</td>
                                        <td class="py-1 px-2">{{$studentCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <h5 style="background-color: sandybrown" class="card-header text-white"> Content Uploads</h5>
                                <table class="w-full table table-striped">
                                    <thead>
                                    <tr class="bg-gray-100">
                                        <th class="py-1 px-2 text-left">Description</th>
                                        <th class="py-1 px-2 text-left">Count</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Content</td>
                                        <td class="py-1 px-2">{{$contentCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Feedbacks</td>
                                        <td class="py-1 px-2">{{$feedbackCount}}</td>
                                    </tr>
                                    <tr class="border-t text-sm">
                                        <td class="py-1 px-2"><i class="fas fa-star text-info"></i>Discussions</td>
                                        <td class="py-1 px-2">{{$discussionCount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card">
                                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                    @if($users->count() > 0)
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 table-bordered">
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
                                        <h4 class="p-2 font-semibold text-xl text-white text-center bg-red-600 leading-tight">No Users</h4>
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
