<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\CategoriaProducto;

class Producto extends Model
{
    use HasFactory;

    /**
     * Relación de producto y categoría
     * @author Luis GP
     * @return Collation
     */
    public function relacionCategoria(): HasOne
    {
        return $this->hasOne(CategoriaProducto::class,'id' ,'id_categoria');
    }

}
