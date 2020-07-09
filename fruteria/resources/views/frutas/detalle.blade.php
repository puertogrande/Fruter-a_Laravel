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
            .page-container {
                position: relative;
                min-height: 100vh;
            }

            footer {
                position: absolute;
                bottom: 0;
                width: 100%;          /* Footer height */
            }
        </style>
    </head>
    <body>
        <div class="page-container">
            @include('includes.header')
            @include('includes.nav')
            <h2> Estos son los detalles de la fruta</h2>
            <h4>{{$fruta->nombre}} <h4>
            <h4> {{$fruta->descripcion}}<h4>
            @include('includes.footer')
        </div>
    </body>
</html>


                        