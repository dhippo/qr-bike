@extends('layouts.homepages')

@section('content')

    <div class="min-h-full w-screen flex bg-kit-blue-light shadow-lg">

        <!--====== LEFT BODY  ======-->
        <div  class="h-screen flex-1 flex flex-col justify-center py-12  lg:flex-none ">

            <!--====== SMALL SCREEN BODY  ======-->
            <div  class="xl:hidden">
            <form class="-mt-52" action="{{ route('signup-post') }}" method="post">
                {{ csrf_field() }}
                <h1 class="mt-4 text-4xl tracking-tight font-bold text-kit-blue-dark sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                    Take control of your data.</h1>
                <h1 class="mt-4 text-4xl tracking-tight font-bold text-kit-blue-dark sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                    Manage your QR easily.</h1>

                <br>
                <label for="email" class="block text-sm font-medium text-gray-700 mt-24"> Email address </label>
                <input id="email" name="email" value="{{ old('email') }}"
                       type="text" autocomplete="current-email"
                       class="mr-4 appearance-none block w-full border border-none rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-kit-blue-dark focus:border-kit-blue-dark w-9/12">
                @if($errors->has('email'))
                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                        <div class="flex">
                            <div class="flex-shrink-0">
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
                <button type="submit"
                        class="bg-kit-blue-dark rounded-full text-white w-full h-12 justify-center border border-transparent mt-7 shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-kit-blue-dark w-9/12">
                    <a href="{{route('signup-post')}}" class="h-18">Sign up</a>
                </button>
            </form>
            </div>



            <!--====== BIG SCREEN BODY  ======-->
            <div style="width: 100%" class="mx-auto w-full hidden xl:block ">

                <div class="mt-8" >

                    <div  class="mt-6">
                        <form style="margin-top: -80px; " class="space-y-6 hidden xl:block" action="{{ route('signup-post') }}" method="post">
                            {{ csrf_field() }}
                            <h1 style="width: 35vw; color: rgba(23,67,99,255); margin-left: 9vw;" class="text-white font-semibold text-6xl"> Store your data in a single application and manage your QR</h1>
                            <div style="width: 34vw" class="flex relative">

                                <div style="margin-right: 100px; margin-left:9vw">
                                    {{--                                   <label for="email" class=" ml-6 block text-sm font-medium text-gray-700"> Email </label>--}}
                                    <div class="mt-1">
                                    <input style="width: 25vw" id="email" name="email" value="{{ old('email') }}"
                                           type="text" autocomplete="current-email"
                                           class=" h-14 appearance-none block w-full px-3 py-2 border border-gray-300 rounded-full shadow-sm placeholder-gray-400 focus:outline-none focus:ring-kit-blue-dark focus:border-kit-blue-dark sm:text-sm">

                                    @if($errors->has('email'))
                                            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                                <div class="flex">
                                                    <div class="flex-shrink-0">
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

                                <div style="margin-left: -90px; z-index: 4; margin-top: 3px; ">
                                    <button type="submit"
                                            class="bg-kit-blue-dark h-14 bottom-0 right-0 w-36 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-kit-blue-dark hover:bg-kit-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-kit-blue-dark">
                                        Sign up
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <!--====== RIGHT BODY (IMAGE ONLY)  ======-->

        <div class="absolute">
            <img style="margin-top: -200px; margin-right: -300px" class="absolute" src="{{URL::asset('/images/artqr.png')}}"
                 alt="myqrlogo">
        </div>
        <div style="margin-left: -100px;margin-top: -60px" class="h-screen relative w-0 flex-1 hidden xl:block">
            <img style="z-index:0; height: 100%; width: 200%" class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/artqr.png')}}"
                 alt="myqrlogo">
        </div>


    </div>

@endsection


