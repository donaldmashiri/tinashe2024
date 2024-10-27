<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Content Uploads') }}
            <a href="{{route('discussions.index')}}"
               class="py-2 px-4 text-white text-sm float-right font-semibold rounded-lg border border-yellow-600 bg-yellow-600">
                <i class="bi bi-plus"></i>Back
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-3 lg:px-3">
            <div class="bg-white overflow-hidden  shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @include('layouts.messages')
                    <form method="POST" action="{{route('discussions.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="py-4 px-4">
                            <div class="">
                                <x-input-label for="topic" :value="__('Topic')" />
                                <x-text-input id="topic" class="block mt-1 w-full" type="text" name="topic" :value="old('topic')" required autofocus autocomplete="topic" />
                                <x-input-error :messages="$errors->get('topic')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-primary-button class="m-4 bg-blue-700 float-right">
                                    {{ __('Create') }}
                                </x-primary-button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

</x-app-layout>
