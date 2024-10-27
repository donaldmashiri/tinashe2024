<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <i class="bi bi-newspaper"></i> {{ __('Content Uploads') }}
            <a href="{{route('content-uploads.index')}}"
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
                    <form method="POST" action="{{route('content-uploads.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="py-4 px-4">
                            <div class="">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('name')" required autofocus autocomplete="title" />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="description" :value="__('Description')" />
                                <input id="description" type="hidden" name="case_description">
                                <trix-editor input="case_description"></trix-editor>
                                <x-input-error :messages="$errors->get('case_description')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="content_type" :value="__('Content Type')" />
                                <select name="content_type" id="" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" >
                                    <option value="">Select Content Type</option>
                                    <option value="Contract disputes">Contract disputes</option>
                                    <option value="Criminal cases">Criminal cases</option>
                                    <option value="Bankruptcy">Bankruptcy</option>
                                    <option value="Personal injury">Personal injury</option>
                                    <option value="Property law">Property law</option>
                                    <option value="Family law">Family law</option>
                                </select>
                                <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                            </div>

                            <div class="mt-4 p-1">
                                <x-input-label for="file_path" :value="__('Content Document')" />
                                <input type="file" name="file_path" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                <x-input-error :messages="$errors->get('file_path')" class="mt-2" />
                            </div>

                            <div class="mt-4">
                                <x-primary-button class="m-4 bg-blue-700 float-right">
                                    {{ __('Submit') }}
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
