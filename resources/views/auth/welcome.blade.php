@extends('layouts.homepages')

@section('content')
    <div class="min-h-full flex justify-center">

        <div style="z-index: 2" class="hidden xl:block relative w-0 flex-1">
            <img style="height: 750px; margin-left: 140px; margin-top: 20px" class="w-9/12 object-contain absolute inset-0 w-full h-screen" src="{{URL::asset('/images/qrfr.png')}}"
                 alt="">
        </div>

        <div class=" h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">

            <div class=" mx-auto w-full max-w-sm lg:w-96">

                <div class="mt-8">

                    <!--====== SMALL AND MOBILE SCREEN FORM  ======-->
                    <div class="xl:hidden -mt-52">
                        <form class="space-y-6" action="{{route('signin-post')}}" method="post">
                            {{ csrf_field() }}

                            <x-inputv2 :errors="$errors" label="First Name" name="firstname" type="text" value="{{old('firstname')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Last Name" name="lastname" type="text" value="{{old('lastname')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Password" name="password" type="password" value="{{old('password')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Password Confirmation" name="password-confirmation" type="password-confirmation" value="{{old('password')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <div class="flex focus:ring-red-500">
                                <button type="submit"
                                        class="bg-kit-red-dark h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-full shadow-sm text-l font-medium text-white hover:bg-kit-yellow-gold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-kit-yellow-gold">
                                    Create your account
                                </button>
                            </div>
                        </form>
                    </div>

                    <!--====== BIG SCREEN FORM  ======-->
                    <div class="hidden xl:block mt-6">
                        <form style="margin-top:-180px; margin-left: -140px; margin-right: 50px" class="space-y-6" action="{{route('signin-post')}}" method="post">
                            {{ csrf_field() }}

                            <x-inputv2 :errors="$errors" label="First Name" name="firstname" type="text" value="{{old('firstname')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Last Name" name="lastname" type="text" value="{{old('lastname')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Password" name="password" type="password" value="{{old('password')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>

                            <x-inputv2 :errors="$errors" label="Password Confirmation" name="password-confirmation" type="password-confirmation" value="{{old('password')}}" color="focus:ring-kit-red-dark focus:border-kit-red-dark"/>


                            <div class="flex">
                                <button type="submit"
                                        class="bg-kit-red-dark h-14 w-full mt-6 mr-auto h-10 justify-center py-2 px-4 border border-transparent rounded-full shadow-sm text-l font-medium text-white hover:bg-kit-yellow-gold focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-kit-yellow-gold">
                                    Create your account
                                </button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

@endsection


