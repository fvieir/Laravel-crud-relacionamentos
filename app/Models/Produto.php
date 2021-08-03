<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = [
        "descricao", "preco", "cor", "peso", "marca_id"
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca' , 'marca_id');
    }

    public function categorias()
    {
        return $this->belongsToMany('App\models\Categoria' , 'categoria_produto');
    }
}
