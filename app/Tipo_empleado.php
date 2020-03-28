<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo_empleado extends Model
{
    protected $table = "tipo_empleados";
    use SoftDeletes;
    protected $fillable = ["nombre",
                            "descripcion"];

    public function Empleado()
    {
        return $this->hasMany('App\Empleado');
    }
}
