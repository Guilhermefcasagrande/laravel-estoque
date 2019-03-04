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
        <h1>Listagem de Produtos</h1>
        <table class="table table-hover">
            <?php foreach ($produtos as $value): ?>
            <tr>
                <td><?php echo $value->nome; ?></td>
                <td><?php echo $value->valor; ?></td>
                <td><?php echo $value->descricao; ?></td>
                <td><?php echo $value->quantidade; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
