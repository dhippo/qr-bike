<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
        <script defer src="https://unpkg.com/alpinejs@3.10.2/dist/cdn.min.js"></script>


        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <title>qr-bike</title>



        <!---
                    -se souvenir de moi
                    -mot de passe oublier
                    -indicateur de masse : graisse, muscle, os ....
                    - si user < 18 ans, on peut demander le responsable legal
                    -domaine :

                                 myqrcode.info
                                 codeqr.me
                                 codeqr.tech

        --->

    </head>
    <body>

        @yield('content')

    </body>
</html>
