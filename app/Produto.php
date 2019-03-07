<?php

namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model{
    //Opcional para forçar o nome da tabela
    protected $table = "produtos";
    public $timestamps = false;

    protected $fillable = array(
        "nome",
        "descricao",
        "valor",
        "quantidade"
    );

    protected $guarded = ["id"];
}
