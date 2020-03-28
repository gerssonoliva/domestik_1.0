<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use SoftDeletes;
    //protected $primaryKey = 'idproductos';
    protected $table = "productos";
    protected $fillable = ["p_nombre",
                        "fecha_ing",
                        "costo",
                        "stock",
                        "proveedores_id"];
    public function Proveedores()
    {
        return $this->belongsTo('App\Proveedor');
    }
}
