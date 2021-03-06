<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset('css/app.css')?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset('css/style.css')?>">
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{action("ProdutoController@lista")}}">Estoque Laravel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action("ProdutoController@lista")}}">Listagem</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{action("ProdutoController@novo")}}">Novo</a>
                    </li>
                </ul>

            </div>
        </nav>

        @yield("conteudo")
    </div>
    <footer class="footer">
        <p>© Aplicação sistema de estoque em Laravel.</p>
    </footer>
</body>
</html>
