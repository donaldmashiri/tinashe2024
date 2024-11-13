<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <i class="bi bi-user"></i> {{ __('Edit User') }}
            <a href="{{route('users.index')}}"
               class="float-right px-4 py-2 text-sm font-semibold text-white bg-yellow-600 border border-yellow-600 rounded-lg">
                <i class="bi bi-plus"></i>Back
            </a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-3 lg:px-3">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    @include('layouts.messages')
                    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="px-4 py-4">
                            <!-- Name Field -->
                            <div class="">
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block w-full mt-1" value="{{ $user->name}}" type="text" name="name" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- User Type Field -->
                            <div class="mt-4">
                                <x-input-label for="user_type" :value="__('User Type')" />
                                <select name="user_type" id="user_type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500">
                                    <option value="{{ $user->user_type}}">{{ $user->user_type}}</option>
                                    <option value="">Select User Type</option>
                                    <option value="lecturer">Lecturer</option>
                                    <option value="student">Student</option>
                                </select>
                                <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
                            </div>

                            <!-- Email Field -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block w-full mt-1" type="email" value="{{ $user->email}}" name="email" required />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>



                            <!-- Expertise Field -->
                            <div class="mt-4">
                                <x-input-label for="expertise" :value="__('Expertise')" />
                                <x-text-input id="expertise" class="block w-full mt-1" type="text" value="{{ $user->expertise}}" name="expertise" />
                                <x-input-error :messages="$errors->get('expertise')" class="mt-2" />
                            </div>

                            <!-- Skill Set Field -->
                            <div class="mt-4">
                                <x-input-label for="skill_set" :value="__('Skill Set')" />
                                <x-text-input id="skill_set" class="block w-full mt-1" type="text" value="{{ $user->skill_set}}"  name="skill_set" />
                                <x-input-error :messages="$errors->get('skill_set')" class="mt-2" />
                            </div>

                            <!-- Academic Level Field -->
                            <div class="mt-4">
                                <x-input-label for="academic_level" :value="__('Academic Level')" />
                                <x-text-input id="academic_level" class="block w-full mt-1" type="text" value="{{ $user->academic_level}}"  name="academic_level" />
                                <x-input-error :messages="$errors->get('academic_level')" class="mt-2" />
                            </div>

                            <!-- Registration Number Field -->
                            <div class="mt-4">
                                <x-input-label for="regnum" :value="__('Registration Number')" />
                                <x-text-input id="regnum" class="block w-full mt-1" type="text" value="{{ $user->regnum}}"  name="regnum" />
                                <x-input-error :messages="$errors->get('regnum')" class="mt-2" />
                            </div>

                            <!-- Programme Field -->
                            <div class="mt-4">
                                <x-input-label for="programme" :value="__('Programme')" />
                                <x-text-input id="programme" class="block w-full mt-1" type="text" value="{{ $user->programme}}"  name="programme" />
                                <x-input-error :messages="$errors->get('programme')" class="mt-2" />
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <x-primary-button class="w-full">
                                    {{ __('Update User') }}
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
