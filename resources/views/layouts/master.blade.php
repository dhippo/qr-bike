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

    <title>qr-bike</title>

</head>
<body>
<div class="mt-6 sm:mt-2 2xl:mt-5">
    <div style="width: 65vw; margin-left: 8vw" class="border-b border-gray-200">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="-mb-px flex space-x-8" aria-label="Tabs">
                <a href="#" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" aria-current="page"> Profile </a>

                <a href="#" style="margin-left: 17.5vw" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Health </a>

                <a href="#" style="margin-left: 17vw" class="border-b-blue-900 text-gray-900 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"> Contact</a>

            </nav>
        </div>
    </div>
</div>
@yield('content')


</body>
</html>
