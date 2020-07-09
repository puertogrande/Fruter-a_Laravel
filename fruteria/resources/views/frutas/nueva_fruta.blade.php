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
            fieldset{
                width:40%;
            }

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
        <h3>Este es el formulario a actualizar </h3> 
            <form name="formul1" method="POST" action="{{action('FruteriaController@save')}}">
            {{ csrf_field() }}

                <fieldset>
                    <legend>Insertar nueva fruta</legend>
                    <div>
                        <label for="nombre">Nombre</label><br>
                        <input type="text" name="nombre" size="50" /><br><br>
                    </div>

                    <div>
                        <label for="descripcion">Descripcion</label><br>
                        <input type="text" name="descripcion" size="50" /><br><br>
                    </div>

                    <div>
                        <label for="precio">Precio</label><br>
                        <input type="number"  name="precio" step="0.01"><br><br><br>
                    </div>
                    <div>
                        <input type="submit" value="Enviar"/>
                    </div>
                </fieldset>
            </form>
            @include('includes.footer')  
        </div>
    </body>
</html>
