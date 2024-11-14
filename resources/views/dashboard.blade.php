<x-app-layout>
    <x-slot name="header">
        Profile
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                
                    <h1 class="mb-3 fw-bold display-4"> {{ __("Welcome ". Auth::user()->user_type .' : '. Auth::user()->name) }}</h1>
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
                                <th><i class="bi bi-briefcase"></i> User Type</th>
                                <td>{{ Auth::user()->user_type }}</td>
                            </tr>
                            <tr>
                                <th><i class="bi bi-calendar-date"></i> Account Created</th>
                                <td>{{ Auth::user()->created_at->format('d M Y') }}</td>
                            </tr>
                            @if (Auth::user()->user_type != 'university' && Auth::user()->user_type != 'admin')
                                <tr>
                                    <th><i class="bi bi-building"></i> Company Number</th>
                                    <td>{{ Auth::user()->company_number }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-star"></i> Expertise</th>
                                    <td>{{ Auth::user()->expertise }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-tools"></i> Skill Set</th>
                                    <td>{{ Auth::user()->skill_set }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-graduation-cap"></i> Academic Level</th>
                                    <td>{{ Auth::user()->academic_level }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-file-earmark-text"></i> Registration Number</th>
                                    <td>{{ Auth::user()->regnum }}</td>
                                </tr>
                                <tr>
                                    <th><i class="bi bi-book"></i> Programme</th>
                                    <td>{{ Auth::user()->programme }}</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
