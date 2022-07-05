@extends('layouts.master')

@section('content')

    <div class="min-h-full flex ">
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/'.$randomImg.'')}}" alt="">
        </div>
        <div class=" h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class=" mx-auto w-full max-w-sm lg:w-96">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <img class="mx-auto mb-4 h-32 w-auto" src="{{URL::asset('/images/logo2.png')}}" alt="Workflow">
                    <h2 class="text-center text-2xl font-extrabold text-gray-900">Sign in with your :</h2>
                </div>



                    <div class="mt-6">
                        <form class="space-y-6" action="/signin" method="post">
                            {{ csrf_field() }}

                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 "> Email address </label>
                                <div class="mt-1">
                                    <input id="email" name="email" value="{{ old('email') }}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                                    <input id="password" name="password" value="{{ old('password') }}" type="password" autocomplete="current-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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

                            <div class="flex items-center justify-between">

                            </div>

                            <div class="flex">
                                <button type="submit" class="w-full mr-auto  justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign in</button>

                            </div>
                            <div class="flex">

                                <a  href="/signup" style="line-height: 23px" class="flex">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                                    </svg>Sign up</a>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


