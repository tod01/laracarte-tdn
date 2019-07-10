<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/3c3db5688d.js"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
        <!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <title>{{ page_title($title ?? '') }}</title>
 
    </head>
    <style>
        body {
            font-family: 'open sans', Helvetica, Arial, sans-serif;
        }

        footer {
            margin: 4em 0;
        }

    </style>
    <body>
       
        @include('layouts.partials._nav')

        @yield('content')
        
        @include('layouts.partials._footer')

        <script src="//code.jquery.com/jquery.js"></script>
       @include('flashy::message')
    </body>
</html>
