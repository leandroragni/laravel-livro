<!doctype html>

<html lang="{{ app()->getLocale() }}">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Detalhes do produtos</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="/css/app.css" rel="stylesheet">
    </head>
    
    <body>
        
        <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="{{ action('ProdutosController@lista') }}">Lista de produtos</a>
            </li>
            <li>
                <a href="{{ action('ProdutosController@cadastrar') }}">Adicionar produto</a>
            </li>
        </ul>
        
        <div class="flex-center position-ref full-height">
   
           @yield('conteudo')
   
        </div>

    </body>

</html>
