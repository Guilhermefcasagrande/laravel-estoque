<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller{

    public function lista(){
        // phpinfo();
        $produtos = DB::select("select * from produtos");

        $html = "<h1>Listagem de produtos com laravel</h1>";

        $html .= "<ul>";
        foreach ($produtos as $value) {
            $html .= "<li> Nome: ".$value->nome.", Descrição: ".$value->descricao."</li>";
        }
        $html .= "</ul>";

        return $html;
    }
}

 ?>
