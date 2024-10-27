<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="fw-bold mb-3 display-4"> {{ __("Welcome ". Auth::user()->user_type .' : '. Auth::user()->name) }}</h1>
                    <p class="m-3">Welcome to creARTive-Connect DECENTRALIZED CONTENT SHARING PLATFORM.</p>
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <tr>
                            <th><i class="bi bi-person-circle"></i> Full Names</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-envelope"></i> Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-briefcase"></i> User type</th>
                            <td>{{ Auth::user()->user_type }}</td>
                        </tr>
                        <tr>
                            <th><i class="bi bi-calendar-date"></i> Account Created</th>
                            <td>{{ Auth::user()->created_at }}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
