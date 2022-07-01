@extends('layouts.master')



@section('content')


    <div class="shadow sm:rounded-md sm:overflow-hidden h-screen flex" style="justify-content: center; align-items: center" >
        <form style="width: 50vw; margin-top: -25px;" class="space-y-8 divide-y divide-gray-200" action="/edit-healthinfo" method="post">
            {{ csrf_field() }}
            <div class="space-y-8 divide-y divide-gray-200">
                <div>
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-500">This information will be displayed publicly so be careful what you share.</p>
                    </div>

                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                        <div class="sm:col-span-6">
                            <label for="photo" class="block text-sm font-medium text-gray-700"> Photo </label>
                            <div class="mt-1 flex items-center">
                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>
                                <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> First name </label>
                            <div class="mt-1">
                                <input type="text" name="firstname" id="first-name" autocomplete="given-name" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('firstname'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('firstname')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="last-name" class="block text-sm font-medium text-gray-700"> Last name </label>
                            <div class="mt-1">
                                <input type="text" name="lastname" id="last-name" autocomplete="family-name" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('lastname'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('lastname')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="nameContact" class=" block text-sm font-medium text-gray-700"> Name Emergency Contact </label>
                            <div class="mt-1">
                                <input type="text" name="nameContact" id="nameContact" autocomplete="nameContact" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('nameContact'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('nameContact')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="phoneContact" class="block text-sm font-medium text-gray-700"> Phone Emergency Contact </label>
                            <div class="mt-1">
                                <input type="text" name="phoneContact" id="phoneContact" autocomplete="phoneContact" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('phoneContact'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('phoneContact')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> Age</label>
                            <div class="mt-1">
                                <input type="text" name="age" id="age" autocomplete="given-age" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('age'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('age')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <div class="pt-8">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">Health Informations</h3>
                        <p class="mt-1 text-sm text-gray-500">Informations about your health and possibly ilness</p>
                    </div>
                    <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">


                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> Blood Group</label>
                            <div class="mt-1">
                                <input type="text" name="blood" id="blood" autocomplete="blood" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('blood'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('blood')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> Doctor </label>
                            <div class="mt-1">
                                <input type="text" name="doctor" id="doctor" autocomplete="doctor" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('doctor'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('doctor')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> Size </label>
                            <div class="mt-1">
                                <input type="text" name="size" id="nameContact" autocomplete="size" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('size'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('size')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="first-name" class=" block text-sm font-medium text-gray-700"> Weight </label>
                            <div class="mt-1">
                                <input type="text" name="weight" id="nameContact" autocomplete="weight" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('weight'))
                                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                        <div class="flex">
                                            <div class="flex-shrink-0">
                                                <!-- Heroicon name: solid/exclamation -->
                                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="text-sm text-red-700">
                                                    {{$errors->first('weight')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="sm:col-span-6">
                            <label for="about" class="block text-sm font-medium text-gray-700"> Illness, Allergy, Medication... </label>
                            <div class="mt-1">
                                <textarea id="other" name="other" rows="3" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                            </div>
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences about health.</p>
                        </div>


                    </div>
                </div>

            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
            </div>
        </form>
    </div>


@endsection
