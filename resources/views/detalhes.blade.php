@extends("principal")

@section("conteudo")
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
@stop
