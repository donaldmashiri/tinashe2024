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
                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th><i class="bi bi-person-circle"></i> Full Names</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-envelope"></i> Email</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-briefcase"></i> User Type</th>
                                <td>{{ $user->user_type }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-calendar-date"></i> Account Created</th>
                                <td>{{ $user->created_at->format('d M Y') }}</td>
                            </tr>
                                <tr>
                                    <th><i class="bi bi-building"></i> Company Number</th>
                                    <td>{{ $user->company_number }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-star"></i> Expertise</th>
                                    <td>{{ $user->expertise }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-tools"></i> Skill Set</th>
                                    <td>{{ $user->skill_set }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-graduation-cap"></i> Academic Level</th>
                                    <td>{{ $user->academic_level }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-file-earmark-text"></i> Registration Number</th>
                                    <td>{{ $user->regnum }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-book"></i> Programme</th>
                                    <td>{{ $user->programme }}</td>
                                </tr>

                        </tbody>
                    </table>
                </div>



            </div>
        </div>

    </div>
</x-app-layout>
