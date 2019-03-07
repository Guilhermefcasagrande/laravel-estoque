<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller{

    public function lista(){
        // $produtos = DB::select("select * from produtos");
        $produtos = Produto::all();

        return view("produto/listagem")->with("produtos", $produtos);
    }

    public function listaJson(){
        // $produtos = DB::select("select * from produtos");
        $produtos = Produto::all();

        return response()->$produtos;
    }

    public function mostra(){
        $id = Request::route("id");
        // $produto = DB::select("select * from produtos where id = ?", [$id]);
        $produto = Produto::find($id);

        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view("produto/detalhes")->with("p", $produto);
    }

    public function novo(){
        return view("produto/formulario-novo");
    }

    public function adiciona(){
        $params = Request::all();
        $produto = new Produto($params);

        // $produto->nome = Request::input("nome");
        // $produto->descricao = Request::input("descricao");
        // $produto->valor = Request::input("valor");
        // $produto->quantidade = Request::input("quantidade");

        // DB::insert("insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)", array($nome, $quantidade, $valor, $descricao));
        $produto->save();

        // Retorna somente um valor do formulário preenchido
        return redirect()->action("ProdutoController@lista")->withInput(Request::only("nome"));

    }
}

 ?>
