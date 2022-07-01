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


jdsjkfhsdlfkjsd
<div></div>


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

@endsection
