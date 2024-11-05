<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <h1 class="p-3 text-black bg-gray-400">Messaging</h1>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @include('layouts.messages')
                <form action="{{route('messaging.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="hidden" name="receiver_id" value="{{$user->id}}">
                                <div class="p-2">
                                    <x-input-label for="message" :value="__('Message')" />
                                    <x-text-input id="message"  class="block mt-1 w-full" type="text" name="message" :value="old('message')" />
                                    <x-input-error :messages="$errors->get('message')" class="mt-2" />
                                </div>
                            </div>
                        </div>

                        <div class=" mt-4">

                            <x-primary-button class="ml-4">
                                {{'Send'}}
                            </x-primary-button>
                        </div>

                    </div>
                </form>
            </div>
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        @foreach ($messages as $message)
                                            <div class="d-flex align-items-start mb-3 border border-r-amber-100 p-3">
                                                <div class="me-2">
                                                    @if ($message->user->user_type == 'lawyer')
                                                        <img src="{{ asset('images/lawyer.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px;">
                                                    @else
                                                        <img src="{{ asset('images/customer.png') }}" alt="User Avatar" class="rounded-circle" style="width: 30px; height: 30px;">
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
</x-app-layout>
