@extends('layouts.app')

@section('content')
<div class="flex flex-col">
    <div class="max-w-7xl mx-auto flex justify-center flex-col text-center py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
            <span class="block">MY QR</span><br>
            <span class="block">You don't have any QR right now.</span>
            <span class="block">Create your free QR today.</span>
        </h2>
    </div>
    <form class="flex justify-center" action="{{ route('createqr') }}">
        <input label="first-creation" name="first-creation" type="hidden" value="first-creation" />
        <button type="submit" class="inline-flex items-center p-3 border border-transparent rounded-full shadow-sm text-white bg-kit-blue-dark hover:bg-kit-blue-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-kit-blue-dark">
            <!-- ICON + -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </button>
    </form>

</div>

@endsection