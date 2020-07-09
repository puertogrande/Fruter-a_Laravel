<!DOCTYPE html>
    <html>
        <head>
            <style>
            nav ul {
            list-style-type: none;
            margin-top:-15px;
            padding: 0;
            overflow: hidden;
            background-color: #333;
            }

            nav li {
            float: left;
            }

            nav li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            nav li a:hover {
            background-color: #111;
            }
            </style>
        </head>
            <body>
                <nav>
                    <ul>
                        <li><a class="active" href="{{action('FruteriaController@indice') }}">Principal</a></li>
                        <li><a href="{{action('FruteriaController@listado_frutas') }}">Listado de frutas</a></li>
                        <li><a href="{{action('FruteriaController@nueva_fruta') }}">Insertar Nueva Fruta</a></li>
                    </ul>
                </nav>
            </body>
    </html>
