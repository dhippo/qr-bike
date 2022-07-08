@extends('layouts.homepages')

@section('content')

    <div class="min-h-full flex justify-center">
        <div class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div class="sm:mx-auto sm:w-full sm:max-w-md">
                    <h2 class="text-center text-2xl font-extrabold text-gray-900 drop-shadow-lg shadow-black">Finish your inscription</h2>
                </div>

                <div class="mt-6">
                    <div class="mt-6">
                        <form class="space-y-6" action="{{ route('welcome-post') }}" method="post">
                            {{ csrf_field() }}
                            <x-form.input :errors="$errors" label="First name" name="firstname" type="text" value="{{old('firstname')}}" />
                            <x-form.input :errors="$errors" label="Last name" name="lastname" type="text" value="{{old('lastname')}}" />
                            <x-form.input :errors="$errors" label="Password" name="password" type="password" value="{{old('password')}}" />
                            <x-form.input :errors="$errors" label="Confirm password" name="password_confirmation" type="password" value="{{old('password')}}" />

                            <x-form.input :errors="$errors" label="" name="token" type="hidden" value="{{$token}}" />




                            <div class="flex" style="background-image: linear-gradient(to right, #174363, #406683, #678ba4, #8fb1c6, #bad9ea); border-radius: 10px; box-shadow: 7px 7px 80px grey;">
                                <button type="submit"
                                        class="w-full mr-auto  justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


