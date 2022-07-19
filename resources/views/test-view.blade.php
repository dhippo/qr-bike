<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ mix('js/app.js') }}" defer></script>


    <title>THE QR PROJECT</title>
{{--    <!-- src="{{URL::asset('/images/MYQR_logo.png')}} -->--}}
</head>
<body class="h-full">
<div class="min-h-full flex flex-col">

    <div id="HEADER" class="relative bg-night-500 shadow-lg" x-data="{ open: false }" >
        <!-- closed menu --><div x-show=" ! open" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center border-gray-100 py-3 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1 m-0 py-0">
                    <a href="{{route('home')}}" class="-py-7 -my-7">
                        <img class="h-28 w-auto pt-1" src="{{URL::asset('/images/MYQR_logo.png')}}" alt="no logo">
                    </a>
                </div>
                <div class="-mr-2 -my-2 md:hidden">
                    <!-- open button h-28  style="height: 7rem"-->
                    <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                        <span class="sr-only">Open menu</span>
                        <!-- Heroicon name: outline/menu -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="{{route('home')}}" class="text-base font-medium text-night-50 hover:underline"> Home </a>

                    <a href="{{route('services')}}" class="text-base font-medium text-night-50 hover:underline"> Services </a>

                    <a href="{{route('aboutus')}}" class="text-base font-medium text-night-50 hover:underline"> About </a>

                    <a href="#" class="text-base font-medium text-night-50 hover:underline"> Shop </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="{{route('signin')}}" class="whitespace-nowrap text-base font-medium text-white hover:underline"> Sign in </a>
                    <a href="{{route('signup')}}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-lg text-base font-medium text-white bg-night-200 hover:underline hover:bg-night-300"> Get started </a>
                </div>
            </div>
        </div>
        <!-- open menu --><div x-show="open" class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden border-sky">
            <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden"><!-- x-data="{ open: false }"> -->
                <div class="px-5 pt-4 flex items-center justify-between">
                    <div>

                    </div>
                    <div class="bg-night-700 rounded-full">
                        <img class="h-24 w-auto pt-1 pl-3" src="{{URL::asset('/images/MYQR_logo.png')}}" alt="no logo">
                    </div>
                    <div class="-mr-2" >
                        <!-- close button -->
                        <button @click="open = ! open" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-600">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="pt-5 pb-6" >
                    <div class="px-2 space-y-1">

                        <!-- REAL ONES -->
                        <a href="{{route('home')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Home</a>

                        <a href="{{route('services')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

                        <a href="{{route('aboutus')}}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About</a>

                        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Shop</a>
                    </div>
                    <div class="mt-6 px-5">
                        <a href="#" class="block text-center w-full py-3 px-4 rounded-md shadow bg-night-500 text-white font-medium hover:bg-night-700">Sign up</a>
                    </div>
                    <div class="mt-6 px-5">
                        <p class="text-center text-base font-medium text-gray-500">Existing customer? <a href="{{route('signin')}}" class="text-gray-900 hover:underline">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN  -->
    <main class="flex-grow mx-auto max-w-7xl w-full flex flex-col px-4 sm:px-6 lg:px-8" x-data="{ underline: 1; test : false }">

        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50 underline-offset-4" x-show="underline : 2">Home</a>
        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50" x-show="underline : 1" @click="underline = 2">Home</a>

        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

        <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About us</a>
<br><br>

        <div x-data="{ tab: 'normal' }">



<br><br>
            <div x-show="tab === 'Homesouligne'"><a href="#" class="underline-offset-4"><u> Home Underline </u></a></div>
            <div x-show="tab === 'normal' "><a href="#" @click="tab = 'Homesouligne'"> Home NOT Underline </a></div>

            <div x-show="tab === 'Servicesouligne'"><a href="#" class="underline-offset-4"><u> Services Underline </u></a></div>
            <div x-show="tab === 'normal'"><a href="#" @click="tab = 'Servicesouligne'"> Services NOT Underline </a></div>

            <div x-show="tab === 'Aboutsouligne'"><a href="#" class="underline-offset-4"><u> About Underline </u></a></div>
            <div x-show="tab === 'normal'"><a href="#" @click="tab = 'Homesouligne'"> About NOT Underline </a></div>
        </div>



    </main>

{{--   FOOTER HERE   --}}
</div>
</body>
</html>