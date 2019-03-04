@extends("principal")

@section("conteudo")
<h1>Listagem de Produtos</h1>
<table class="table table-hover">
    @foreach ($produtos as $value)
        <tr>
            <td>{{ $value->nome }}</td>
            <td>{{ $value->valor }}</td>
            <td>{{ $value->descricao }}</td>
            <td>{{ $value->quantidade }}</td>
            <td><a href="/produtos/mostra/<?php echo $value->id; ?>">Visualizar</a></td>
        </tr>
    @endforeach
</table>
@stop
