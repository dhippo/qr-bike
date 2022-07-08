@extends('layouts.homepages')

@section('content')
<div class="background" style="background-color: rgba(186,217,234,255)">

    <!-- Base -->
    <section  class="pt-24 md:mt-0 md:h-screen flex flex-col justify-center text-center md:text-left md:flex-row md:justify-between md:items-center lg:px-48 md:px-12 px-4 bg-secondary">
        <div class="md:flex-1 md:mr-10">
            <h1 class="font-pt-serif text-5xl font-bold mb-7">
                Create simple QR in a fev minutes.
                <span class="bg-underline1 bg-left-bottom bg-no-repeat pb-2 bg-100%">
              cool website
            </span>
            </h1>
            <p class="font-pt-serif font-normal mb-7">
                The purpose of our project is to offer a solution to athletes that would allow them to generate a QR code in order to access their health data in case of emergency.
                Thus, they will be able to print the generated QR code and find a way to stick it on their bike, their helmet, their equipment.<br /><br />

            </p>
            <div class="font-montserrat">
                <button class="bg-black px-6 py-4 rounded-lg border-2 border-black border-solid text-white mr-2 mb-2">
                    Sign in
                </button>
                <button class="px-6 py-4 border-2 border-black border-solid rounded-lg">
                    Get Started
                </button>
            </div>
        </div>

    </section>


    <!-- Features -->
    <div class="py-12">
        <div class="mx-auto px-4 sm:px-6 lg:max-w-7xl lg:px-8 ">

            <dl class="space-y-10 lg:space-y-0 lg:grid lg:grid-cols-3 lg:gap-8 flex flex-col md:flex-row" >
                <div class="mx-8  ">
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <!-- Heroicon name: outline/globe-alt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                </div>

                <div class="mx-8">
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <!-- Heroicon name: outline/scale -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">No hidden fees</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                </div>

                <div class="mx-8">
                    <dt>
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                            <!-- Heroicon name: outline/lightning-bolt -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <p class="mt-5 text-lg leading-6 font-medium text-gray-900">Transfers are instant</p>
                    </dt>
                    <dd class="mt-2 text-base text-gray-500">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.</dd>
                </div>
            </dl>
        </div>
    </div>



    <!-- get suscribe -->
    <div class="">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">How it works</h2>
                <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">All the information you need to make the most of our application.</p>
                <p class="max-w-xl mt-5 mx-auto text-xl text-gray-500">Start building for free, then add a site plan to go live. Account plans unlock additional features.</p>
            </div>
        </div>
    </div>

    <!-- Stats -->
    <div class="container mx-auto px-4 sm:px-6 lg:px-8" style="justify-content: space-around">
        <h3 class="text-lg leading-6 font-medium text-gray-900">Today</h3>
        <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-sm font-medium text-gray-500 truncate">Total Subscribers</dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">71,897</dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-sm font-medium text-gray-500 truncate">QR generated</dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">58</dd>
            </div>

            <div class="px-4 py-5 bg-white shadow rounded-lg overflow-hidden sm:p-6">
                <dt class="text-sm font-medium text-gray-500 truncate">useful qr</dt>
                <dd class="mt-1 text-3xl font-semibold text-gray-900">1000000</dd>
            </div>
        </dl>
    </div>


    <!-- FAQ  -->
    <section class="sectionSize items-start pt-8 md:pt-36  text-white">
        <div>
            <h2 class="secondaryTitle bg-highlight3 p-10 mb-0 bg-center bg-100%">
                FAQ
            </h2>
        </div>

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Where can I get this HTML template?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                You can download it on Gumroad.com
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Is this HTML template free?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! For you it is free.
            </div>
        </div>
        <hr class="w-full bg-white" />

        <div toggleElement class="w-full py-4">
            <div class="flex justify-between items-center">
                <div question class="font-montserrat font-medium mr-auto">
                    Am I awesome?
                </div>
                <img src='dist/assets/logos/CaretRight.svg' alt="" class="transform transition-transform" />
            </div>
            <div answer class="font-montserrat text-sm font-extralight pb-8 hidden">
                Yes! No doubt about it.
            </div>
        </div>
        <hr class="w-full bg-white" />

    </section>


</div>

@endsection