@extends('layouts.homepages')

@section('content')
    <div class="h-screen overflow-hidden">

        <div class="relative bg-white"style="background-color: rgba(254,177,165,255)">
            <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                 </div>

        <div style="margin-top: -6vh" class="min-h-full flex">


            <div style="background-color: rgba(254,177,165,255)"
                 class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="mx-auto w-full max-w-sm lg:w-96">





                    <div style=" width: 25vw; margin-left:100px; margin-top: -70px" class="mt-8" >

                        <div class="mt-6">
                            <form  class="space-y-6 mr-56" action="{{ route('welcome-post') }}" method="post">
                                {{ csrf_field() }}

                                <div>
                                    <label for="lastname" class="ml-5 block text-sm font-medium text-gray-700 "> Last Name </label>
                                    <div class="mt-1">
                                        <input style="width: 25vw" id="lastname" name="lastname" value="{{ old('lastname') }}" type="text" autocomplete="lastname" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-700 focus:border-red-700 sm:text-sm">
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

                                <div>
                                    <label for="firstname" class="ml-5 block text-sm font-medium text-gray-700 "> First Name </label>
                                    <div class="mt-1">
                                        <input style="width: 25vw" id="firstname" name="firstname" value="{{ old('firstname') }}" type="text" autocomplete="firstname" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none  focus:ring-red-700 focus:border-red-700 sm:text-sm">
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

                                <div>
                                    <label for="password" class="ml-5 block text-sm font-medium text-gray-700"> Password </label>
                                    <div class="mt-1">
                                        <input style="width: 25vw" id="password" name="password" value="{{ old('password') }}" type="password" autocomplete="current-password" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-700 focus:border-red-700 sm:text-sm">
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

                                <div>
                                    <label for="password" class="ml-5 block text-sm font-medium text-gray-700"> Password Confirmation</label>
                                    <div class="mt-1">
                                        <input style="width: 25vw" id="password-confirmation" name="password-confirmation" value="{{ old('password') }}" type="password" autocomplete="current-password" class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-red-700 focus:border-red-700 sm:text-sm">
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
                                <input label="token" name="token" type="hidden" value="{{$token}}" />

                                <div class="flex">
                                    <input type="submit" name="Envoyer">
                                    <button style="background-color: rgba(167,49,55,255); border-radius: 50px;width: 25vw" type="submit"
                                            class="rounded-full h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-l font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-700">
                                        Sign up
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div style="z-index: -3; background-color: rgba(254,177,165,255)" class="hidden lg:block relative w-0 flex-1">
                <img style="height: 700px; width: 700px;margin-top: 100px; margin-left: 250px" class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/qrfr.png')}}"
                     alt="">
            </div>
        </div>
    </div>

@endsection


