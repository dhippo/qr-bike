@extends('layouts.homepages')

@section('content')

    <div class="min-h-full flex ">

        <div style="z-index: 2" class="hidden lg:block relative w-0 flex-1">
            <img style="width: 750px; height: 750px; margin-left: 140px; margin-top: 20px" class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/qrjaune.png')}}"
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

                            <x-form.input :errors="$errors" label="Email" color="focus:ring-yellow-500 focus:border-yellow-500" name="Email" type="Email"  value="{{old('Email')}}" />


                            <x-form.input :errors="$errors" label="Password" color="focus:ring-yellow-500 focus:border-yellow-500" name="password" type="password"  value="{{old('password')}}" />
                            <div class="flex">
                                <button style="background-color: rgba(249,191,110,255); border-radius: 50px; width: 25vw" type="submit"
                                        class="rounded-full h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-l font-medium text-white bg-indigo-600 hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


