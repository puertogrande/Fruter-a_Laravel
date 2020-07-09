<!doctype html>

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
            fieldset{
                width:40%;
            }
            .page-container {
                position: relative;
                min-height: 100vh;
            }

            footer {
                min-height: 100%
                
                bottom: 0;
                width: 100%;          /* Footer height */
            }
        </style>
        
    </head>
    <body>
        <div class="page-container">
            @include('includes.header')
            @include('includes.nav')
                <div class="content">
                <li>
                @foreach($frutas as $fruta)
                <li>
                        <?php
                        $id= $fruta->id;?> 
                    <a href="{{action('FruteriaController@detalles', $id ) }}">{{$fruta->nombre}}</a>
                    <a href="{{action('FruteriaController@borrar', $id ) }}">borrar</a>
                    <a href="{{action('FruteriaController@actualizar', $id ) }}">actualizar</a>
                
                </li>
                @endforeach
                </li>
                @include('includes.footer')          
        </div>
    </body>
</html>
