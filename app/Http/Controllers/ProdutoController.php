<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller{

    public function lista(){
        // phpinfo();
        $produtos = DB::select("select * from produtos");

        return view("produto/listagem")->with("produtos", $produtos);
    }

    public function mostra(){
        $id = Request::route("id");
        $produto = DB::select("select * from produtos where id = ?", [$id]);

        if(empty($produto)){
            return "Esse produto não existe";
        }
        return view("produto/detalhes")->with("p", $produto[0]);
    }
}

 ?>
