@extends('layouts.master')

@section('content')

    <form>
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">

            <div>
                <h3 class="text-lg leading-6 font-medium text-gray-900">Personal Information</h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">Use a permanent address where you can receive mail.</p>
            </div>

            <div class="mt-6 sm:mt-5 space-y-6 sm:space-y-5">

                <!-- name and phone contact
                        <div class="sm:col-span-3">
                            <label for="nameContact" class=" block text-sm font-medium text-gray-700"> Name Emergency Contact </label>
                            <div class="mt-1">
                                <input type="text" name="nameContact" id="nameContact" autocomplete="nameContact" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                                @if($errors->has('nameContact'))
                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                        <div class="flex">
                            <div class="flex-shrink-0">

                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">
    {{$errors->first('nameContact')}}
                    </p>
                </div>
            </div>
        </div>
    @endif
                </div>
            </div>

            <div class="sm:col-span-3">
                <label for="phoneContact" class="block text-sm font-medium text-gray-700"> Phone Emergency Contact </label>
                <div class="mt-1">
                    <input type="text" name="phoneContact" id="phoneContact" autocomplete="phoneContact" class="h-9 shadow focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
    @if($errors->has('phoneContact'))
                    <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                        <div class="flex">
                            <div class="flex-shrink-0">

                                <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-red-700">
    {{$errors->first('phoneContact')}}
                    </p>
                </div>
            </div>
        </div>
    @endif
                </div>
            </div> --->  contact

                <!-- first name --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> First name </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="firstname" id="first-name" autocomplete="given-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- last name  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="lastname" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Last name </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- email  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Email address </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input id="email" name="email" type="email" placeholder="you@example.com" value="adamwathan" aria-invalid="true" aria-describedby="email-error" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- country  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Country </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <select id="country" name="country" autocomplete="country-name" class="max-w-lg block focus:ring-indigo-500 focus:border-indigo-500 w-full shadow-sm sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                            <option>France</option>
                            <option>Spain</option>
                            <option>Italie</option>
                            <option>France</option>
                            <option>Benin</option>
                            <option>Togo</option>
                            <option>Japan</option>
                            <option>India</option>
                            <option>Australia</option>

                        </select>
                    </div>
                </div>

                <!-- adresse --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="street-address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Street address </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block max-w-lg w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- city  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> City </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="city" id="city" autocomplete="address-level2" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- state   --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> State / Province </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="region" id="region" autocomplete="address-level1" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- postal code  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="postal-code" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Postal code </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- password  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="password" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Mot de passe</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="password" id="password" autocomplete="password" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- important contact --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="important-contact" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">Contact important</label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <input type="text" name="important-contact" id="important-contact" autocomplete="important-contact" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>

                <!-- username  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="username" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Username </label>
                    <div class="mt-1 sm:mt-0 sm:col-span-2">
                        <div class="max-w-lg flex rounded-md shadow-sm">
                            <input type="text" name="username" id="username" autocomplete="username" class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md">
                        </div>
                    </div>
                </div>

                <!-- blood group  --->
                <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                    <label for="blood-group" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> Groupes sanguins </label>

                    <!-- bouton (blood group) --->

                    <input class="flex justify-center">
                    <div
                            x-data="{
                gsang:'',  //   gsang : variable name (set null)
                open: false,
                toggle() {
                    if (this.open) {
                        return this.close()
                    }

                    this.$refs.button.focus()

                    this.open = true
                },
                close(focusAfter) {
                    if (! this.open) return

                    this.open = false

                    focusAfter && focusAfter.focus()
                }
            }"
                            x-on:keydown.escape.prevent.stop="close($refs.button)"
                            x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                            x-id="['blood-button']"
                            class="relative"
                    >
                        <!-- Button -->
                        <button
                                x-ref="button"
                                x-on:click="toggle()"
                                :aria-expanded="open"
                                :aria-controls="$id('blood-button')"
                                type="button"
                                class="bg-white px-5 py-2.5 rounded-md shadow"
                        >
                            <span>Actions</span>
                            <span aria-hidden="true">&darr;</span>
                        </button>


                        <!-- print choice -->

                        <span x-text="gsang"></span>


                        <!-- Panel -->
                        <div
                                x-ref="panel"
                                x-show="open"
                                x-transition.origin.top.left
                                x-on:click.outside="close($refs.button)"
                                :id="$id('blood-button')"
                                style="display: none;"
                                class="absolute left-0 mt-2 w-40 bg-white rounded shadow-md overflow-hidden"
                        >
                            <div>
                                <a href="#" @click.prevent="gsang = 'A+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    A +
                                </a>

                                <a href="#" @click.prevent="gsang = 'A-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    A -
                                </a>
                            </div>

                            <div class="border-t border-gray-200">
                                <a href="#" @click.prevent="gsang = 'B+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    B +
                                </a>

                                <a href="#" @click.prevent="gsang = 'B-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    B -
                                </a>
                            </div>

                            <div class="border-t border-gray-200">
                                <a href="#" @click.prevent="gsang = 'AB+'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    AB +
                                </a>

                                <a href="#" @click.prevent="gsang = 'AB-'"class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    AB -
                                </a>
                            </div>

                            <div class="border-t border-gray-200">
                                <a href="#" @click.prevent="gsang = 'O+'" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500" >
                                    O +
                                </a>

                                <a href="#" @click.prevent="gsang = 'O-'" class="block w-full px-4 py-2 text-left text-sm hover:bg-gray-50 disabled:text-gray-500">
                                    O -
                                </a>

                            </div>
                        </div>
                    </div>

                    <!-- about  ( sentence ) --->
                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                        <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2"> About </label>
                        <div class="mt-1 sm:mt-0 sm:col-span-2">
                            <textarea id="about" name="about" rows="3" class="max-w-lg shadow-sm block w-full focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm border border-gray-300 rounded-md"></textarea>
                            <p class="mt-2 text-sm text-gray-500">Write a few sentences about yourself.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pt-5">
                <div class="flex justify-end">
                    <button type="button" class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</button>
                    <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                </div>
            </div>
        </div>
    </form>

@endsection

@push('moncss')

    <style>



        input{
            max-width: 15vw;
        }

        form{
            width: 45vw;
            padding:3vw;
            box-shadow: 0px 0px 60px 10px darkgrey;
            border-radius: 50px;
            display: flex;
            -webkit-animation: animform 1s ease-in-out forwards;
            animation: animform 1s ease-in-out forwards;
        }



        @keyframes animform {
            from {
                transform : translateY(50vw);
            }
            to{
                transform : translateY(0vw);
            }
        }







    </style>

@endpush



