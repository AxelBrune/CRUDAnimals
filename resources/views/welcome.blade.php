<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mon premier composant</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>        
        <div id="app">
            <h1>Application CRUD laravel+VueJS</h1>
            <div class="container">
                <router-view></router-view>
            </div>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
