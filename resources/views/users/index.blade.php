<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <i class="bi bi-user"></i> {{ __('Users') }}
            <a href="{{route('users.create')}}"
               class="float-right px-4 py-2 text-sm font-semibold text-white bg-yellow-600 border border-yellow-600 rounded-lg">
                <i class="bi bi-plus"></i>Add
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-3">
            <div class="overflow-hidden text-center bg-white shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @if($users->count() > 0)
                    <table class="w-full text-sm text-left text-gray-500 rtl:text-right dark:text-gray-400 table-bordered">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-2 py-1">#</th>
                                <th scope="col" class="px-2 py-1">Name</th>
                                <th scope="col" class="px-2 py-1">Email</th>
                                <th scope="col" class="px-2 py-1">User Type</th>
                                <th scope="col" class="px-2 py-1">Company Number</th>
                                <th scope="col" class="px-2 py-1">Expertise</th>
                                <th scope="col" class="px-2 py-1">Skill Set</th>
                                <th scope="col" class="px-2 py-1">Academic Level</th>
                                <th scope="col" class="px-2 py-1">Registration Number</th>
                                <th scope="col" class="px-2 py-1">Programme</th>
                                <th scope="col" class="px-2 py-1">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-2 py-1">{{ $loop->iteration }}</td>
                                    <td class="px-2 py-1">{{ $user->name }}</td>
                                    <td class="px-2 py-1">{{ $user->email }}</td>
                                    <td class="px-2 py-1">{{ $user->user_type }}</td>
                                    <td class="px-2 py-1">{{ $user->company_number }}</td>
                                    <td class="px-2 py-1">{{ $user->expertise }}</td>
                                    <td class="px-2 py-1">{{ $user->skill_set }}</td>
                                    <td class="px-2 py-1">{{ $user->academic_level }}</td>
                                    <td class="px-2 py-1">{{ $user->regnum }}</td>
                                    <td class="px-2 py-1">{{ $user->programme }}</td>
                                    <td class="px-2 py-1">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h4 class="p-2 text-xl font-semibold leading-tight text-center text-white bg-red-600">No Users Available</h4>
                @endif
                </div>



            </div>
        </div>

    </div>
</x-app-layout>
