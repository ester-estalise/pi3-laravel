<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
    protected $fillable =['USUARIO_ID','PRODUTO_ID','ITEM_QTD'];
    protected $table ='CARRINHO_ITEM';
    public $timestamps = false;

    public function Produto(){
            return $this->belongsTo(Produto::class, 'PRODUTO_ID','PRODUTO_ID');
    }

    protected function setKeysForSaveQuery($query)
    {
        $query->where('USUARIO_ID',$this->getAttribute('USUARIO_ID'))
                ->where('PRODUTO_ID',$this->getAttribute('PRODUTO_ID'));
                return $query;
    }
}
