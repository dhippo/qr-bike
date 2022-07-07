<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>

    <title>THE QR PROJECT</title>

</head>
<body>

<!--====== HEADER PART  ======-->

<header style="background-color: rgba(23,67,99,255)">
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" aria-label="Top">
        <div class="w-full py-6 flex items-center justify-between border-b border-indigo-500 lg:border-none">
            <div class="flex items-center">

{{--                LOGO                --}}

                {{--<a href="#">
                    <span class="sr-only">Workflow</span>
                    <img class="h-10 w-auto" src="https://tailwindui.com/img/logos/workflow-mark.svg?color=white" alt="">
                </a>--}}
                <div class="hidden ml-12 space-x-8 lg:block">
                    <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Home </a>

                    <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Services </a>

                    <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Shop </a>

                    <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> About us</a>
                </div>
            </div>
            <div class="ml-10 space-x-4">
                <a href="#" class="inline-block bg-indigo-500 py-2 px-4 border border-transparent rounded-md text-base font-medium text-white hover:bg-opacity-75">Sign in</a>
                <a href="#" class="inline-block bg-white py-2 px-4 border border-transparent rounded-md text-base font-medium text-indigo-600 hover:bg-indigo-50">Sign up</a>
            </div>
        </div>
        <div class="py-4 flex flex-wrap justify-center space-x-6 lg:hidden">
            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Home </a>

            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> Services </a>

            <a href="#" class="text-base font-medium text-white hover:text-indigo-50"> About us </a>

        </div>
    </nav>
</header>

<!--====== END OF HEADER ======-->

@yield('content')


</body>
</html>
