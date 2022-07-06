@extends('layouts.master')

@section('content')

    <div class="min-h-full flex">
        <div class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div  class="mx-auto w-full max-w-sm lg:w-96">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="text-center text-2xl font-extrabold text-gray-900">Insert your name and create a password to activate your account :</h2>
                </div>



                <div class="mt-6">
                    <form class="space-y-6" action="/signup" method="post">
                        {{ csrf_field() }}






                        <label for="fullname" class="block text-sm font-medium text-gray-700"> Full Name (ex: John Do) </label>
                        <div class="mt-1">
                            <input id="fullname" name="fullname" type="text" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        </div>


                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>
                            <div class="mt-1">
                                <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password-confirmation" class="block text-sm font-medium text-gray-700"> Password confirmation</label>
                            <p class="text-xl text-gray-500">(just to avoid a typing error)</p>

                            <div class="mt-1">
                                <input id="password-confirmation" name="password-confirmation" type="password-confirmation" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            </div>
                        </div>




                        <div class="flex items-center justify-between">

                        </div>

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

@endsection


