@extends('layouts.app')

@section('content')




<div>
    <div>
        <div>
            <img class="h-32 w-full object-cover lg:h-48" src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" alt="">
        </div>
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                <div class="flex">
                    <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32" src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=8&w=1024&h=1024&q=80" alt="">
                </div>
                <div class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate"></h1>
                    </div>
                </div>
            </div>
            <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                <h1 class="text-2xl font-bold text-gray-900 truncate"></h1>
            </div>
        </div>
    </div>


    <!-- Tabs -->
    <div class="mt-6 sm:mt-2 2xl:mt-5">

        <div style="width: 65vw; margin-left: 8vw" class="border-b border-gray-200">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                    <!-- Current: "border-pink-500 text-gray-900", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300" -->
                    <a href="#" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page"> Profile </a>

                    <a href="#" style="margin-left: 17.5vw" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Health </a>

                    <a href="#" style="margin-left: 17vw" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Contact</a>

                </nav>
            </div>
        </div>
    </div>

    <!-- Description list -->
    <div style="width: 65vw; margin-left: 10vw" class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 flex">
        <dl style="width: 55px; min-width: 55px" class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

            <div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">FirstName</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">LastName</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Country</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">City</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Phone</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

            </div>
        </dl>

        <dl style="margin-left: 17.5vw; width: 52px; min-width: 52px" class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div>
                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">BloodGroup</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Sex</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Age</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Size</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Weight</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-2">
                    <dt class="text-sm font-medium text-gray-500">About</dt>
                    <dd class="mt-1 max-w-prose text-sm text-gray-900 space-y-5">
                        <p style="width: 200px; flex-wrap: wrap"></p>
                    </dd>
                </div>

            </div>
        </dl>

        <dl style="margin-left: 17vw" class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
            <div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Name Contact</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Phone Contact</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Name Doctor</dt>
                    <dd class="mb-8 mt-1 text-sm text-gray-900"></dd>
                </div>

                <div class="sm:col-span-1">
                    <dt class="text-sm font-medium text-gray-500">Phone Doctor</dt>
                    <dd class="mt-1 text-sm text-gray-900"></dd>
                </div>
            </div>
        </dl>

    </div>

</div>

    @endsection