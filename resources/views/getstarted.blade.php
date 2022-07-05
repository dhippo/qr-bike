@extends('layouts.master')



@section('content')

<div class="bg-white">
    <div class="max-w-7xl mx-auto text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">Ready to create your own QR CODE ?</span><br><br>
            <span class="block">Start creating your own QR code <br>using our free templates .<br></span>
        </h2>
        <div class="mt-8 flex justify-center">
            <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-black bg-green-600 hover:bg-green-700"> Get started </a>
            </div>
            <div class="ml-3 inline-flex">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-green-900 bg-blue-100 hover:bg-blue-200"> Learn more </a>
            </div>
        </div>
    </div>
</div>


{{--<form class="space-y-6" action="/signup" method="post">--}}
{{--    {{ csrf_field() }}--}}

{{--    <div>--}}
{{--        <label for="email" class="block text-sm font-medium text-gray-700 "> Email address </label>--}}
{{--        <div class="mt-1">--}}
{{--            <input id="email" name="email" value="{{ old('email') }}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--            @if($errors->has('email'))--}}
{{--            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">--}}
{{--                <div class="flex">--}}
{{--                    <div class="flex-shrink-0">--}}
{{--                        <!-- Heroicon name: solid/exclamation -->--}}
{{--                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="ml-3">--}}
{{--                        <p class="text-sm text-red-700">--}}
{{--                            {{$errors->first('email')}}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="password" class="block text-sm font-medium text-gray-700"> Password </label>--}}
{{--        <div class="mt-1">--}}
{{--            <input id="password" name="password" value="{{ old('password') }}" type="password" autocomplete="current-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--            @if($errors->has('password'))--}}
{{--            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">--}}
{{--                <div class="flex">--}}
{{--                    <div class="flex-shrink-0">--}}
{{--                        <!-- Heroicon name: solid/exclamation -->--}}
{{--                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="ml-3">--}}
{{--                        <p class="text-sm text-red-700">--}}
{{--                            {{$errors->first('password')}}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div>--}}
{{--        <label for="password_confirmation" class="block text-sm font-medium text-gray-700"> Password confirmation</label>--}}
{{--        <div class="mt-1">--}}
{{--            <input id="password_confirmation" name="password_confirmation" type="password" autocomplete="current-password"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">--}}
{{--            @if($errors->has('password_confirmation'))--}}
{{--            <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">--}}
{{--                <div class="flex">--}}
{{--                    <div class="flex-shrink-0">--}}
{{--                        <!-- Heroicon name: solid/exclamation -->--}}
{{--                        <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                            <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <div class="ml-3">--}}
{{--                        <p class="text-sm text-red-700">--}}
{{--                            {{$errors->first('password_confirmation')}}--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            @endif--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="flex items-center justify-between">--}}

{{--    </div>--}}

{{--    <div class="flex">--}}
{{--        <button type="submit" class="w-full mr-auto  justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>--}}
{{--    </div>--}}
{{--    <div class="flex">--}}
{{--        <a  href="/signin" class="flex" style="line-height: 23px; position: relative; left: 81% " >--}}
{{--            Sign in<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">--}}
{{--                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />--}}
{{--            </svg></a>--}}

{{--    </div>--}}
{{--</form>--}}

@endsection

