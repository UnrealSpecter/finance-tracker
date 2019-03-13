<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>finance</title>

        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body>
        <div id="app" class="flex justify-center items-center bg-green" style="height: 100vh;">
            <finance-tracker></finance-tracker>
        </div>
    </body>
    <script src="{{ asset('/js/app.js') }}"></script>
</html>
