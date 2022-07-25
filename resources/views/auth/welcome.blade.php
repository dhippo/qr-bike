@extends('layouts.master')

@section('content')
    <div class="h-screen overflow-hidden">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white"style="background-color: rgba(254,177,165,255)">
            <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="#">
                        <span class="sr-only">Workflow</span>
                        <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                    </a>
                </div>
                <nav style="width: 55vw" class="hidden md:flex space-x-10">


                    <a style="margin-left: 140px" href="#" class="ml-28 text-base font-medium text-gray-500 hover:text-red-900"> Home </a>
                    <a style="margin-left: 140px" href="#" class=" text-base font-medium text-gray-500 hover:text-red-900"> Services </a>
                    <a style="margin-left: 140px" href="#" class="text-base font-medium text-gray-500 hover:text-red-900"> About Us </a>
                    <a style="margin-left: 140px" href="#" class="text-base font-medium text-gray-500 hover:text-red-900"> Contacts </a>

                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="/signin" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-red-900"> Sign in </a>
                    <a href="#" style="background-color: rgba(167,49,55,255)" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700"> Sign up </a>
                </div>
            </div>

        </div>

        <div style="margin-top: -6vh" class="min-h-full flex">


            <div style="background-color: rgba(254,177,165,255)"
                 class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
                <div class="mx-auto w-full max-w-sm lg:w-96">





                    <div style=" width: 25vw; margin-left:100px; margin-top: -70px" class="mt-8" >

                        <div class="mt-6">
                            <form  class="space-y-6" action="/signin" method="post">
                                {{ csrf_field() }}

                                <x-form.input :errors="$errors" label="Last Name" color="focus:ring-red-700 focus:border-red-700" name="lastname" type="text"  value="{{old('lastname')}}" />

                                <x-form.input :errors="$errors" label="First Name" color="focus:ring-red-700 focus:border-red-700" name="firstname" type="text"  value="{{old('firstname')}}" />

                                <x-form.input :errors="$errors" label="Password" color="focus:ring-red-700 focus:border-red-700" name="password" type="password"  value="{{old('password')}}" />

                                <x-form.input :errors="$errors" label="Password Confirmation" color="focus:ring-red-700 focus:border-red-700" name="password_confirmation" type="password"  value="{{old('password_confirmation')}}" />

                                <div class="flex">
                                    <button style="background-color: rgba(167,49,55,255); border-radius: 50px;width: 25vw" type="submit"
                                            class="rounded-full h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-l font-medium text-white bg-indigo-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-700">
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


