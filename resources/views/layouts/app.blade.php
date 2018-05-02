<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

          <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


        <title> Chukua </title>

        <style> 
        
        .bgimg{
            background-image:url("imgs/arrows-box-business.jpg");
            height: 100vh;

            background-size:cover;
            background-position:center;
        }
        </style>

    </head>
    <body>
        <div id="app">
        @include('inc.navbar')

        @if($flash = session('message'))
        <div class ="alert alert-success" role="alert">
            {{$flash}}
        </div>
        @endif

        <div class = "container"> 
            @include('inc.messages')
            @yield ('content')
        </div>
        
        <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    </body>
</html>
