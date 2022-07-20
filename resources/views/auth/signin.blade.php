@extends('layouts.master')

@section('content')

    <div style="background-color: rgba(186,217,234,255)" class="h-screen w-screen overflow-hidden">
        <div class="relative bg-white "style="background-color: rgba(186,217,234,255); z-index: 3">
            <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                    </a>
                </div>
                <nav style="width: 55vw" class="hidden md:flex space-x-10">


                    <a style="margin-left: 140px" href="#" class="ml-28 text-base font-medium text-gray-500 hover:text-gray-900"> Pricing </a>
                    <a style="margin-left: 140px" href="#" class=" text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>
                    <a style="margin-left: 140px" href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Prcing </a>
                    <a style="margin-left: 140px" href="#" class="text-base font-medium text-gray-500 hover:text-gray-900"> Docs </a>

                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="/signin" style="background-color: rgba(23,67,99,255)" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign in </a>
                    <a href="/signup" class=" px-4 py-2 whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900" > Sign up </a>

                </div>
            </div>

        </div>
        <div class="min-h-full flex ">

            <div style="z-index: 2" class="hidden lg:block relative w-0 flex-1">
                <img style="margin-left: -180px; margin-top: -50px" class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/artqr.png')}}"
                     alt="">
            </div>

            <div class=" h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">

                <div class=" mx-auto w-full max-w-sm lg:w-96">

                    <div class="mt-8">


                        @if($errors->has('checkInBox'))
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
                                            {{$errors->first('checkInBox')}}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endif


                        <div class="mt-6">
                            <form style="margin-top:-180px; margin-left: -140px; margin-right: 50px"class="space-y-6" action="/signin" method="post">
                                {{ csrf_field() }}

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 "> Email address </label>
                                    <div class="mt-1">
                                        <input id="email" name="email" value="{{ old('email') }}" type="text" autocomplete="email" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-900 focus:border-indigo-900 sm:text-sm">
                                        @if($errors->has('email'))
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
                                                            {{$errors->first('email')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>

                                <div>
                                    <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                                    <div class="mt-1">
                                        <input id="password" name="password" value="{{ old('password') }}" type="password" autocomplete="current-password" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-900 focus:border-indigo-900 sm:text-sm">
                                        @if($errors->has('password'))
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
                                                            {{$errors->first('password')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="flex">
                                    <button style="background-color: rgba(23,67,99,255)" type="submit"
                                            class="rounded-full h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Sign up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection