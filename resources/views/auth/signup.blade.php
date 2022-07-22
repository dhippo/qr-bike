@extends('layouts.homepages')

@section('content')

    <div class="min-h-full w-screen flex bg-kit-blue-light shadow-lg">

        <!--====== LEFT BODY  ======-->
        <div class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full">





                <div class="mt-8" >

                    <div class="mt-6">
                        <form style="margin-top: -80px" class="space-y-6" action="{{ route('signup-post') }}" method="post">
                            {{ csrf_field() }}
                            <h1 style="width: 35vw; color: rgba(23,67,99,255)" class="text-white font-semibold ml-20 text-6xl"> Store your data in a single application and manage your QR</h1>
                            <div style="width: 34vw" class="flex relative ml-20">

                                <div>
                                    {{--                                   <label for="email" class=" ml-6 block text-sm font-medium text-gray-700"> Email </label>--}}
                                    <div class="mt-1">
                                        <input style="width: 25vw" id="email" name="email" value="{{ old('email') }}"
                                               type="text" autocomplete="current-email"
                                               class="h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-900 focus:border-indigo-900 sm:text-sm">
                                        @if($errors->has('email'))
                                            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                                <div class="flex">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: solid/exclamation -->
                                                        <svg class="h-5 w-5 text-red-400"
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                             fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                                  clip-rule="evenodd"/>
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
                                        @if($errors->has('checkInBox'))
                                            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                                <div class="flex">
                                                    <div class="flex-shrink-0">
                                                        <!-- Heroicon name: solid/exclamation -->
                                                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                                  clip-rule="evenodd"/>
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
                                    </div>
                                </div>

                                <div class="flex">
                                    <button style="background-color: rgba(23,67,99,255); border-radius: 50px" type="submit"
                                            class=" h-14 absolute bottom-0 right-0 w-36 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Sign up
                                    </button>
                                </div>
                            </div>

                            {{--<div class="flex">
                                <a href="/signin" class="flex"
                                   style="line-height: 23px; position: relative; left: 81% ">
                                    Sign in
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                         viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </a>

                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--====== RIGHT BODY (IMAGE ONLY)  ======-->
        <div class="relative w-0 flex-1">
            <img class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/artqr.png')}}"
                 alt="myqrlogo">
        </div>

    </div>

@endsection


