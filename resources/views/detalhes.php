<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Listagem de produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo asset('css/app.css')?>">
    <!-- <script src="main.js"></script> -->
</head>
<body>
    <div class="container">
        <h1>Detalhes do Produto</h1>
        <ul>
            <li>
                <strong>Nome: </strong> <?php echo $p->nome ?>
            </li>
            <li>
                <strong>Valor: </strong> <?php echo $p->valor ?>
            </li>
            <li>
                <strong>Descrição: </strong> <?php echo $p->descricao ?>
            </li>
            <li>
                <strong>Quantidade em estoque: </strong> <?php echo $p->quantidade ?>
            </li>
        </ul>
    </div>
</body>
</html>
