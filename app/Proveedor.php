<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Proveedor extends Model
{
    use SoftDeletes;
    //protected $primaryKey = 'idproveedores';
    protected $table = "proveedores";
    protected $fillable = ["nombre",
                        "ruc",
                        "direccion",
                        "telefono",
                        "correo",
                        "titular"];

    public function Producto()
    {
        return $this->hasMany('App\Producto');
    }
}
