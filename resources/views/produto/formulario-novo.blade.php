@extends("layout/principal")

@section("conteudo")
    <form action="/produtos/adiciona" method="post">
        <!-- Input necessário do laravel. Segurança contra ataques do tipo CSRF -->
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}">

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label>
            <input type="text" class="form-control" id="valor" name="valor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
@stop
