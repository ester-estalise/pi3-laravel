<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    //variavel protegida
    protected $table = "PRODUTO";
    protected $primaryKey = "PRODUTO_ID";


    public function ProdutoImagem(){
        return $this->hasMany(ProdutoImagem::class,'PRODUTO_ID','PRODUTO_ID');
    }

    public function ProdutoEstoque(){
        return $this -> belongsTo(ProdutoEstoque::class,'PRODUTO_ID','PRODUTO_ID');
    }

    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'CATEGORIA_ID','CATEGORIA_ID');
    }

    public function getImagem() {
        if (count($this->ProdutoImagem) === 0) {
            return "https://triunfo.pe.gov.br/pm_tr430/wp-content/uploads/2018/03/sem-foto.jpg";
        } else {
            return $this->ProdutoImagem[0]->IMAGEM_URL;
        }
    }
}
