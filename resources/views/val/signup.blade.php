@extends('layouts.master')

@section('content')

    <div class="min-h-full flex">
        <div class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div  class="mx-auto w-full max-w-sm lg:w-96">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <img class="mb-4 mx-auto h-32 w-auto" src="{{URL::asset('/images/logo2.png')}}" alt="Workflow">
                    <h2 class="text-center text-2xl font-extrabold text-gray-900">Sign up with your :</h2>
                </div>



                    <div class="mt-6">
                        <form class="space-y-6" action="{{ route('signup-post') }}" method="post">
                            {{ csrf_field() }}
                            <x-form.input :errors="$errors" label="Votre email" name="email" type="email" value="{{old('email')}}" />

                            <div class="flex">
                                <button type="submit" class="w-full mr-auto  justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                            </div>
                            <div class="flex">
                                <a  href="/signin" class="flex" style="line-height: 23px; position: relative; left: 81% " >
                                    Sign in<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                    </svg></a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 w-full object-cover h-screen" src="{{URL::asset('/images/'.$randomImg.'')}}" alt="">
        </div>
    </div>

@endsection


