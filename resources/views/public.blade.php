@extends('layouts.master')



@section('content')


test


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
        <h1 class="mt-2 text-4xl font-extrabold text-white tracking-tight sm:text-5xl">Uh oh! I think you’re lost.</h1>
        <p class="mt-2 text-lg font-medium text-black text-opacity-50">It looks like the page you’re looking for doesn't exist.</p>
        <div class="mt-6">
            <a href="#" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-black text-opacity-75 bg-white bg-opacity-75 sm:bg-opacity-25 sm:hover:bg-opacity-50"> Go back home </a>
        </div>
    </div>
</main>



@endsection
