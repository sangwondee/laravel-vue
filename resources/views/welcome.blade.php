<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div id="app">
                    <example-component/>
                </div>
            </div>
        </div>
    </body>
    <script src="js/app.js" charset="utf-8"></script>
</html>
