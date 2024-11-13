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
                    <div class="row">
                        <div class="col-md-4">
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
                        <div class="col-md-8">
                            <div class="row">
                                <form action="{{route('messaging.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="p-6 text-gray-900 dflex">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="hidden" name="receiver_id" value="{{$user->id}}">
                                                <div class="p-2">
                                                    <x-input-label for="message" :value="__('Message')" />
                                                    <x-text-input id="message"  class="block w-full mt-1" type="text" name="message" :value="old('message')" />
                                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>

                                            <x-primary-button class="mb-3 float-end">
                                                {{'Send'}}
                                            </x-primary-button>

                                    </div>
                                </form>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">Messages</div>
                                        <div class="card-body">
                                            @foreach ($messages as $message)
                                                <div class="p-3 mb-3 border d-flex align-items-start border-r-amber-100">
                                                    <div class="me-2">
                                                        @if ($message->user->user_type == 'student')
                                                            <img src="{{ asset('assets/images/student.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px;">
                                                        @else
                                                            <img src="{{ asset('assets/images/lecturer.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px;">
                                                        @endif

                                                    </div>
                                                    <div>
                                                        <div class="fw-bold">
                                                                {{ $message->user->name }}
                                                        </div>
                                                        <div>
                                                                {{ $message->message }}
                                                        </div>
                                                        <div class="text-muted" style="font-size: 0.8rem;">{{ $message->created_at->format('d M Y, h:i A') }}</div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>



            </div>
        </div>

    </div>
</x-app-layout>
