    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Bagan Chiya Cafe</title>
        @include('layouts.links')
        <link href="{{ asset('css/hero.css') }}" rel="stylesheet">

        <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    </head>

    <body>
        @include('layouts.header')
        @include('layouts.hero')
        @include('layouts.home')
        @include('layouts.footer')

        <script src="{{ asset('js/app.js') }}"></script>
    </body>

    </html>
