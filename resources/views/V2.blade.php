@extends('layouts.master')

@section('content')

    <div class="min-h-full flex">
        <div class="h-screen flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div  class="mx-auto w-full max-w-sm lg:w-96">
                <h1>fgyjhvjlnm</h1>
                <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
                <div class="mt-6">
                    <form class="space-y-6" action="/signup" method="post">
                        {{ csrf_field() }}
                        <div class="containeur-flex">
                            <div class="input-email">
                                <label for="email" class="block text-sm font-medium text-gray-700 "> Email address </label>
                                <div class="mt-1">
                                    <input id="email" name="email" value="{{ old('email') }}" type="text" autocomplete="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    @if($errors->has('email'))
                                        <div class="bg-red-50 border-l-4 border-red-400 p-2 mt-1.5">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 180 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <p class="text-sm text-red-700">
                                                        {{$errors->first('email')}}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="flex">
                                <button type="submit" class="w-full mr-auto  justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Sign up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="container-gif">
            container gif

            <link rel="gif qr">
            <img src="https://thumbs.gfycat.com/VainLankyAbyssiniancat-mobile.mp4" />


        </div>
    </div>

@endsection


@push('moncss')

    <style>

        .container-gif{
            height: 100%;
            background: url("https://tenor.com/46S5.gif") center;
        }

        .containeur-flex{

            display: inline;
            justify-content: flex-start;
            align-items: center;

        }

        form{
            display: inline;

        }
    </style>

@endpush
