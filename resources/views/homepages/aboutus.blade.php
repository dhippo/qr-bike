@extends('layouts.homepages')

@section('content')

    <main class="min-h-full bg-cover bg-top sm:bg-top invert-0" style="background-image: url('{{URL::asset('/images/bgqrcode.jpg')}}')">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center text-invert sm:px-6 sm:py-24 lg:px-8 lg:py-48">
            <p class="text-sm font-semibold text-black text-opacity-50 uppercase tracking-wide">MYQRCODE.INFO</p>
            <h1 class="mt-2 text-4xl font-extrabold text-invert tracking-tight sm:text-5xl">We hope you enjoy generating QR CODE with our website.</h1>
            <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like you looking for information about us.</p>
            <div class="mt-6">
                <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50"> Go back home </a>
            </div>
        </div>
    </main>

    <div class="bg-white">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our leadership</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                <div class="font-medium text-lg leading-6 space-y-1">
                                    <h3>Leslie Alexander</h3>
                                    <p class="text-indigo-600">Co-Founder / CEO</p>
                                </div>
                            </div>
                        </li>

                        <!-- More people... -->
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <path d="M203.371.916c-26.013-2.078-76.686 1.963-124.73 9.946L67.3 12.749C35.421 18.062 18.2 21.766 6.004 25.934 1.244 27.561.828 27.778.874 28.61c.07 1.214.828 1.121 9.595-1.176 9.072-2.377 17.15-3.92 39.246-7.496C123.565 7.986 157.869 4.492 195.942 5.046c7.461.108 19.25 1.696 19.17 2.582-.107 1.183-7.874 4.31-25.75 10.366-21.992 7.45-35.43 12.534-36.701 13.884-2.173 2.308-.202 4.407 4.442 4.734 2.654.187 3.263.157 15.593-.78 35.401-2.686 57.944-3.488 88.365-3.143 46.327.526 75.721 2.23 130.788 7.584 19.787 1.924 20.814 1.98 24.557 1.332l.066-.011c1.201-.203 1.53-1.825.399-2.335-2.911-1.31-4.893-1.604-22.048-3.261-57.509-5.556-87.871-7.36-132.059-7.842-23.239-.254-33.617-.116-50.627.674-11.629.54-42.371 2.494-46.696 2.967-2.359.259 8.133-3.625 26.504-9.81 23.239-7.825 27.934-10.149 28.304-14.005.417-4.348-3.529-6-16.878-7.066Z"></path>
@endsection