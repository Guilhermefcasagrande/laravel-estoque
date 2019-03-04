@extends("principal")

@section("conteudo")
<h1>Detalhes do Produto</h1>
<ul>
    <li>
        <strong>Nome: </strong> {{ $p->nome }}
    </li>
    <li>
        <strong>Valor: </strong> {{ $p->valor }}
    </li>
    <li>
        <strong>Descrição: </strong> {{ $p->descricao }}
    </li>
    <li>
        <strong>Quantidade em estoque: </strong> {{ $p->quantidade }}
    </li>
</ul>
@stop
