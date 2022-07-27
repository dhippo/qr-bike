<?php

use Illuminate\Routing\Route;

?>
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

    <title>THE QR PROJECT</title>

</head>
<body style="width: 100vw; overflow-x: hidden" >

@if ( Request::routeIs('signin') || Request::routeIs('login'))
    <div id="bodydiv" class="h-screen w-screen bg-kit-yellow-light">
        @elseif ( Request::routeIs('home') || Request::routeIs('signup'))
            <div id="bodydiv" class="h-screen w-screen bg-brandcolor-first200">
                @elseif ( Request::routeIs('services'))
                    <div id="bodydiv" class="h-screen w-screen bg-brandcolor-second200">
                        @elseif ( Request::routeIs('aboutus'))
                            <div id="bodydiv" class="h-screen w-screen bg-brandcolor-third200">
                                @elseif ( Request::routeIs('contact'))
                                    <div id="bodydiv" class="h-screen w-screen bg-kit-green-light">
                                        @endif



                                        <!--====== HEADER PART  ======-->

                                        <div style="z-index: 3" id="HEADER" class="relative" x-data="{ open: false }">
                                            <!-- computer view -->
                                            <div class="w-full mx-auto px-4 sm:px-6 lg:px-8 pt-0.5">
                                                <div class="flex w-full	justify-between items-center border-gray-100 py-3 md:justify-around md:space-x-10">

                                                    <!--====== LOGO PART  ======-->
                                                    <div class="flex justify-start lg:w-0 lg:flex-1 m-0 py-0">
                                                        <a href="{{route('home')}}" class="md:hidden -py-7 -my-7">
                                                            <!--====== LOGO ON MOBILE  ======-->
                                                            <img class="h-28 w-auto pt-1"
                                                                 src="{{URL::asset('/images/logonightblue.png')}}"
                                                                 alt="no logo">
                                                        </a>
                                                        <a href="{{route('home')}}" class="hidden lg:block -py-7 -my-7">
                                                            <!--====== LOGO ON BIG SCREEN  ======-->
                                                            <img class="h-28 w-auto pt-1"
                                                                 src="{{URL::asset('/images/logonightblue.png')}}"
                                                                 alt="no logo">
                                                        </a>
                                                    </div>
                                                    <!--====== MOBILE BUTTON PART  ======-->
                                                    <div class="-mr-2 -my-2 md:hidden">
                                                        <!-- open button h-28  style="height: 7rem"-->
                                                        <button @click="open = ! open" type="button"
                                                                class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brandcolor-first700"
                                                                aria-expanded="false">
                                                            <span class="sr-only">Open menu</span>
                                                            <!-- Heroicon name: outline/menu -->
                                                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                                 fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                                 stroke="currentColor" aria-hidden="true">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                      d="M4 6h16M4 12h16M4 18h16"/>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                    <!--====== NAV PAGE TITLES PART  ======-->
                                                    <nav class="hidden md:flex space-x-20">

                                                        <x-navlink href="{{ route('home') }}" name="home"
                                                                   color="bg-brandcolor-first700" value="Home"
                                                                   hovercolor="#174363"/>

                                                        <x-navlink href="{{ route('services') }}" name="services"
                                                                   color="bg-brandcolor-second500" value="Services"
                                                                   hovercolor="#1A80D9"/>

                                                        <x-navlink href="{{ route('aboutus') }}" name="aboutus"
                                                                   color="bg-brandcolor-third500" value="About"
                                                                   hovercolor="#1AB6D9"/>

                                                        <x-navlink href="{{ route('contact') }}" name="contact"
                                                                   color="bg-kit-green-dark" value="Contact"
                                                                   hovercolor="#47641d"/>

                                                    </nav>
                                                    <!--====== BUTTON SIGN IN / UP PART  ======-->
                                                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                                                        <a href="{{route('signin')}}" class="whitespace-nowrap text-base font-medium
                        {{  ( Request::routeIs('signin') || Request::routeIs('login') ) ?
                                'px-4 py-2
                                border
                                border-transparent
                                rounded-md
                                shadow-sm
                                text-white
                                bg-brandcolor-fifth500

                                '
                            :
                                'text-gray-500
                                rounded-md
                                hover:text-white
                                hover:bg-brandcolor-fifth500
                                px-4 py-2
                                hover:border
                                hover:border-transparent
                                hover:shadow-sm
                                duration-300
                                '
                        }}">Sign in
                                                        </a>

                                                        <a href="{{route('signup')}}" class=" whitespace-nowrap text-base font-medium px-4 py-2
                        {{   Request::routeIs('signup') ?
                                'px-4 py-2
                                ml-4
                                bg-brandcolor-first500
                                rounded-md
                                shadow-sm
                                text-white
                                '
                            :
                                'ml-4
                                text-gray-500
                                rounded-md
                                hover:bg-brandcolor-first500
                                hover:text-white
                                duration-300
                                '
                            }}">Get started
                                                        </a>

                                                    </div>


                                                </div>
                                            </div>
                                            <!-- mobile view -->
                                            <div x-show="open"
                                                 class="absolute top-0 inset-x-0 p-2 transition transform origin-top md:hidden border-sky">
                                                <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                                                    <!-- x-data="{ open: false }"> -->
                                                    <div class="px-5 pt-4 flex items-center justify-between">
                                                        <div>
                                                            <!-- empty div to center the logo -->
                                                        </div>
                                                        <div class="rounded-full -my-3">
                                                            @if ( Request::routeIs('signin') || Request::routeIs('login') )
                                                                <img class="h-28 w-auto -my-7 pl-3"
                                                                     src="{{URL::asset('/images/logojaune.png')}}"
                                                                     alt="no logo">
                                                            @else
                                                                <img class="h-28 w-auto -my-7 pl-3"
                                                                     src="{{URL::asset('/images/logonightblue.png')}}"
                                                                     alt="no logo">
                                                            @endif
                                                        </div>
                                                        <div class="-mr-2">
                                                            <!-- close button -->
                                                            <button @click="open = ! open" type="button"
                                                                    class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brandcolor-first700">
                                                                <span class="sr-only">Close menu</span>
                                                                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                                                                     fill="none" viewBox="0 0 24 24" stroke-width="2"
                                                                     stroke="currentColor" aria-hidden="true">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                          d="M6 18L18 6M6 6l12 12"/>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="pt-5 pb-6">
                                                        <div class="px-2 flex justify-center">

                                                            <x-navlink href="{{ route('home') }}" name="home"
                                                                       color="bg-brandcolor-first700" value="Home"
                                                                       hovercolor="#174363"/>

                                                            <x-navlink href="{{ route('services') }}" name="services"
                                                                       color="bg-brandcolor-second500" value="Services"
                                                                       hovercolor="#1A80D9"/>

                                                            <x-navlink href="{{ route('aboutus') }}" name="aboutus"
                                                                       color="bg-brandcolor-third500" value="About"
                                                                       hovercolor="#1AB6D9"/>

                                                            <x-navlink href="{{ route('contact') }}" name="contact"
                                                                       color="bg-brandcolor-fourth500" value="Contact"
                                                                       hovercolor="#50BFA0"/>

                                                            <!-- REAL ONES -->
                                                            <!--                    <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Home</a>

                                                                                <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Services</a>

                                                                                <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">About</a>

                                                                                <a href="" class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-50">Contact</a>-->
                                                        </div>
                                                        @if ( Request::routeIs('signin') || Request::routeIs('login') )
                                                            <div class="mt-6 px-5">
                                                                <a href="{{route('signup')}}"
                                                                   class="block text-center w-full py-3 px-4 rounded-md shadow bg-brandcolor-fifth-500 text-white font-medium hover:bg-brandcolor-fifth200">Sign
                                                                    up</a>
                                                            </div>
                                                            <div class="mt-6 px-5">
                                                                <p class="text-center text-base font-medium text-gray-500">
                                                                    Existing customer? <a href="{{route('signin')}}"
                                                                                          class="text-gray-900 hover:underline">Sign
                                                                        in</a></p>
                                                            </div>
                                                        @else
                                                            <div class="mt-6 px-5">
                                                                <a href="{{route('signup')}}"
                                                                   class="block text-center w-full py-3 px-4 rounded-md shadow bg-brandcolor-first500 text-white font-medium hover:bg-brandcolor-first200">Sign
                                                                    up</a>
                                                            </div>
                                                            <div class="mt-6 px-5">
                                                                <p class="text-center text-base font-medium text-gray-500">
                                                                    Existing customer? <a href="{{route('signin')}}"
                                                                                          class="text-gray-900 hover:underline">Sign
                                                                        in</a></p>
                                                            </div>
                                                        @endif


                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--====== END OF HEADER ======-->

                                        @yield('content')

                                        <!--======  FOOTER PART  ======-->

                                        <footer class="bg-white">
                                            <div class="max-w-7xl mx-auto py-12 px-4 overflow-hidden sm:px-6 lg:px-8">
                                                <nav class="-mx-5 -my-2 flex flex-wrap justify-center"
                                                     aria-label="Footer">
                                                    <div class="px-5 py-2">
                                                        <a href="https://www.societe.com/societe/tetra7-884923475.html"
                                                           class="text-base text-gray-500 hover:text-gray-900">
                                                            Tetra7 </a>
                                                    </div>

                                                    <div class="px-5 py-2">
                                                        <a href="https://tailwindui.com/components/marketing/sections/footers"
                                                           class="text-base text-gray-500 hover:text-gray-900"> About
                                                            Us</a>
                                                    </div>

                                                    <div class="px-5 py-2">
                                                        <a href="https://www.facebook.com/valentino.jacinto"
                                                           class="text-base text-gray-500 hover:text-gray-900">
                                                            Valentino </a>
                                                    </div>


                                                </nav>
                                                <div class="mt-8 flex justify-center space-x-6">
                                                    <a href="https://fr-fr.facebook.com/"
                                                       class="text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">Facebook</span>
                                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                             aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </a>

                                                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"
                                                       class="text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">Instagram</span>
                                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                             aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </a>

                                                    <a href="https://twitter.com/?lang=fr"
                                                       class="text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">Twitter</span>
                                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                             aria-hidden="true">
                                                            <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                                                        </svg>
                                                    </a>

                                                    <a href="https://github.com/dhippo/qr-bike"
                                                       class="text-gray-400 hover:text-gray-500">
                                                        <span class="sr-only">GitHub</span>
                                                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                             aria-hidden="true">
                                                            <path fill-rule="evenodd"
                                                                  d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </a>


                                                </div>
                                                <p class="mt-8 text-center text-base text-gray-400">&copy; 2023 Tetra7
                                                    (Every day one step closer to the future), Inc. All rights
                                                    reserved.</p>
                                            </div>
                                        </footer>

                                        <!--====== END OF FOOTER ======-->

                                    </div>
                            </div>  <!-- close 'bodydiv' -->
</body>
</html>
