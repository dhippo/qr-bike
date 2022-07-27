@extends('layouts.master')

@section('content')

    <div x-data="{ openWin: false }">
        <button @click="openWin = !openWin">Expand</button>
        <div
                x-transition:enter="transition ease-linear duration-300"
                x-transition:enter-start="-translate-x-full opacity-0"
                x-transition:enter-end="translate-x-0 opacity-100"

                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="translate-x-0 opacity-100"
                x-transition:leave-end="-translate-x-full opacity-0"

                x-show="openWin" class="p-12 bg-emerald-200 text-emerald-500 shadow rounded">
            <p> ceci est un test !!!</p>
            <span>
          Content...
        </span>
        </div>

    </div>

    <div x-data="{ openWin: false }">
        <button @click="openWin = !openWin">Expand</button>
        <div
                x-transition:enter="transition ease-linear duration-300"
                x-transition:enter-start="-translate-x-full opacity-0 scale-90"
                x-transition:enter-end="translate-x-0 opacity-100 scale-100"

                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="translate-x-0 opacity-100 scale-100"
                x-transition:leave-end="-translate-x-full opacity-0 scale-90"

                x-show="openWin" class="p-12 bg-emerald-200 text-emerald-500 shadow rounded">
            <p> ceci est un test !!!</p>
            <span>
          Content...
        </span>
        </div>

    </div>

    <!-- error exemple -->
    <main class="min-h-full bg-cover bg-top sm:bg-top">
        <div class="max-w-7xl mx-auto px-4 py-16 text-center sm:px-6 sm:py-24 lg:px-8 lg:py-48">
            <p class="text-sm font-semibold text-black text-opacity-50 uppercase tracking-wide">404 error</p>
            <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re
                lost.</h1>
            <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like the page you’re looking for
                doesn't exist.</p>
            <div class="mt-6">
                <a href="#"
                   class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50">
                    Go back home </a>
            </div>
        </div>
    </main>

    <main>
        <div class="pt-10 bg-gray-900 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
            <div class="mx-auto max-w-7xl lg:px-8">
                <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
                        <div class="lg:py-24">
                            <a href="#"
                               class="inline-flex items-center text-white bg-black rounded-full p-1 pr-2 sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                                <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-gradient-to-r from-teal-500 to-cyan-600 rounded-full">We're hiring</span>
                                <span class="ml-4 text-sm">Visit our careers page</span>
                                <!-- Heroicon name: solid/chevron-right -->
                                <svg class="ml-2 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                          d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </a>
                            <h1 class="mt-4 text-4xl tracking-tight font-extrabold text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                                <span class="block">Store your data in a single application and manage your QR</span>
                                <span class="pb-3 block bg-clip-text text-transparent bg-gradient-to-r from-magenta-200 to-cyan-400 sm:pb-5">ship web apps</span>
                            </h1>
                            <p class="text-base text-gray-300 sm:text-xl lg:text-lg xl:text-xl">Anim aute id magna
                                aliqua ad ad non deserunt sunt. Qui irure qui Lorem cupidatat commodo. Elit sunt amet
                                fugiat veniam occaecat fugiat.</p>
                            <div class="mt-10 sm:mt-12">
                                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                                    <div class="sm:flex">
                                        <div class="min-w-0 flex-1">
                                            <label for="email" class="sr-only">Email address</label>
                                            <input id="email" type="email" placeholder="Enter your email"
                                                   class="block w-full px-4 py-3 rounded-md border-0 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">
                                        </div>
                                        <div class="mt-3 sm:mt-0 sm:ml-3">
                                            <button type="submit"
                                                    class="block w-full py-3 px-4 rounded-md shadow bg-gradient-to-r from-magenta-500 to-cyan-600 text-white font-medium hover:from-magenta-600 hover:to-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-400 focus:ring-offset-gray-900">
                                                Start free trial
                                            </button>
                                        </div>
                                    </div>
                                    <p class="mt-3 text-sm text-gray-300 sm:mt-4">Start your free 14-day trial, no
                                        credit card necessary. By providing your email, you agree to our <a href="#"
                                                                                                            class="font-medium text-white">terms
                                            of service</a>.</p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
                        <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
                            <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
                            <img class="w-full lg:absolute lg:inset-y-0 lg:left-0 lg:h-full lg:w-auto lg:max-w-none"
                                 src="https://tailwindui.com/img/component-images/cloud-illustration-magenta-cyan.svg"
                                 alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="bg-white">
        <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
                <div class="space-y-5 sm:space-y-4">
                    <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our leadership</h2>
                    <p class="text-xl text-gray-500">Libero fames augue nisl porttitor nisi, quis. Id ac elit odio vitae
                        elementum enim vitae ullamcorper suspendisse. Vivamus fringilla.</p>
                </div>
                <div class="lg:col-span-2">
                    <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
                        <li>
                            <div class="flex items-center space-x-4 lg:space-x-6">
                                <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20"
                                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                     alt="">
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

    <div x-data="{number: 0, countList:[]}">
        <span x-text="number"></span>
        <button @click="number++, countList.push(number)">toggle</button>
        <form style="..." action="/create-qp" method="post">
            {{ csrf_field() }}
            <input type="text" name="coucou"> <input type="text" name="salut"><br>
            <template x-for="count in countList">
                <div>
                    <input type="text" x-bind:name :name="number"> <input type="text" x-bind:name="number"><br>
                </div>
            </template>
            <button type="submit" class="w-full mr-auto justify-center py-2 px-4 border border-transparent"></button>
        </form>
    </div>

@endsection
