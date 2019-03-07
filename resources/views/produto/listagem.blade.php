@extends("layout/principal")

@section("conteudo")
    @if(empty($produtos))
        <div class="alert alert-danger">
            <p>Você não tem nenhum produto cadastrado</p>
        </div>
    @else
        <h1>Listagem de Produtos</h1>
        <table class="table table-hover">
            @foreach ($produtos as $value)
                <tr class="{{ $value->quantidade <= 1 ? 'alert alert-danger' : '' }}">
                    <td>{{ $value->nome }}</td>
                    <td>{{ $value->valor }}</td>
                    <td>{{ $value->descricao }}</td>
                    <td>{{ $value->quantidade }}</td>
                    <td><a href="/produtos/mostra/<?php echo $value->id; ?>" title="Visualizar"><i class="far fa-eye"></i></a></td>
                </tr>
            @endforeach
        </table>
    @endif
    <h4>
        <span class="badge badge-danger">
            Um ou menos itens no estoque
        </span>
    </h4>

    @if(old('nome'))
        <div class="alert alert-success">
            <p>Produto {{old('nome')}} adicionado com sucesso!</p>
        </div>
    @endif
@stop
