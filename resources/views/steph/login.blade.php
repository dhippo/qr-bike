@extends('layouts.master')


@section('content')

        <form action="/login" class="row g-3" method="post">

            @csrf

            <div class="row">
                <div class="col">
                    <label for="inputEmail4" class="form-label">First name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="first name" aria-label="First name">
                </div>
                <div class="col"><!--- -->
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="last name" aria-label="Last name" >
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input type="email" name="email" id="email" class="block w-full pr-10 border-red-300 text-red-900 placeholder-red-300 focus:outline-none focus:ring-red-500 focus:border-red-500 sm:text-sm rounded-md" placeholder="you@example.com" value="adamwathan" aria-invalid="true" aria-describedby="email-error">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                        <!-- Heroicon name: solid/exclamation-circle -->
                        <svg class="h-5 w-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                    </div>
                </div>
                <p class="mt-2 text-sm text-red-600" id="email-error">Your password must be less than 4 characters.</p>
            </div>
                <!---  <div class="col">
                    <label class="form-label">Last name</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" aria-label="User name" >
                </div>
            </div> -->

            <div class="col">
                <label for="inputEmail4" class="form-label">Email</label>

                <input type="email" class="form-control" name="email" id="email" placeholder="....@exem.com">
            </div>
            <div class="col">
                <label for="inputPassword4" class="form-label">Password</label>

                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>


            <!---
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="col-md-4">
                <label for="inputState" class="form-label">State</label>
                <select id="inputState" class="form-select">
                    <option selected="">Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="col-12"> </div>-->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label" >
                        I'm not a robot
                    </label>
                </div>



            <br><br>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>



@section('content')

@push('moncss')
    <style>
        // Your custom css...



    </style>
@endpush

