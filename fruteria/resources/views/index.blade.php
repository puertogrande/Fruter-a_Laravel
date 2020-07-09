<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
        <!-- Styles -->
        <style>
            img{
                width:80%;
                margin-left:10%;
            }
        </style>
    </head>
    <body>
   
    @include('includes.header')
    @include('includes.nav')
    <img src="../storage/app/public/imagenes/fruteria.jpg">    
    @include('includes.footer')             
    </body>
</html>
