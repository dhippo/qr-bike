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

    <nav class="fixed flex justify-between py-6 w-full lg:px-48 md:px-12 px-4 content-center z-10"
         style="background-color: rgba(23,67,99,255)">
        <div class="flex items-center">
        </div>
        <ul class="font-montserrat items-center hidden md:flex">
            <li class="mx-3 ">
                <a class="growing-underline" href="#">
                    Home
                </a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#">Services</a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#">About us</a>
            </li>
        </ul>
        <div class="font-montserrat hidden md:block">
            <button class="mr-6"><a href="#">Login</a></button>
            <button class="py-2 px-4 text-white bg-black rounded-3xl">
                <a href="#">Get started</a>
            </button>
        </div>
        <div id="showMenu" class="md:hidden">

        </div>
    </nav>
    <div id='mobileNav' class="hidden px-4 py-6 fixed top-0 left-0 h-full w-full bg-secondary z-20 animate-fade-in-down">
        <div id="hideMenu" class="flex justify-end">
            <img src='dist/assets/logos/Cross.svg' alt="" class="h-16 w-16" />
        </div>
        <ul class="font-montserrat flex flex-col mx-8 my-24 items-center text-3xl">
            <li class="mx-3 ">
                <a class="growing-underline" href="#">
                    Home
                </a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#">Services</a>
            </li>
            <li class="growing-underline mx-3">
                <a href="#">About us</a>
            </li>
        </ul>
    </div>

<!--====== END OF HEADER ======-->

@yield('content')


</body>
</html>
