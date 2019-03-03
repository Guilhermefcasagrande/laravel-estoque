<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()    {
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder{
    public function run(){
        DB::insert("insert into produtos
            (nome, quantidade, valor, descricao)
            values (?,?,?,?)",
            array("Geladeira", 2, 5900.00, "Com gelo na porta")
        );
        DB::insert("insert into produtos
            (nome, quantidade, valor, descricao)
            values (?,?,?,?)",
            array("Fogão", 5, 950.00, "Painel digital")
        );
        DB::insert("insert into produtos
            (nome, quantidade, valor, descricao)
            values (?,?,?,?)",
            array("Microondas", 1, 350.00, "Muito bom")
        );
    }
}
