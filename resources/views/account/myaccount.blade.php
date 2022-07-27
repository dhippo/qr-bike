@extends('layouts.app')

@section('content')

MY ACCOUNT

<div class="flex justify-center">
    <div class="sm:col-span-1">
        <dt class="text-lg font-medium text-gray-500">FirstName</dt>
        <dd class="mb-8 mt-1 text-sm text-gray-900">{{$firstname}}</dd>
    </div>

    <div class="sm:col-span-1">
        <dt class="text-lg font-medium text-gray-500">LastName</dt>
        <dd class="mb-8 mt-1 text-sm text-gray-900">{{$lastname}}</dd>
    </div>
</div>

@endsection