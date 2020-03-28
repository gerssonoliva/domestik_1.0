<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    protected $table = "empleados";
    use SoftDeletes;
    protected $fillable = ["e_nombre",
                            "apellido",
                            "direcion",
                            "telefono",
                            "fecha_nac",
                            "correo",
                            "tipo_empleados_id",
                            "logins_id"];
    public function Tipo_empleado()
    {
        return $this->belongsTo('App\Tipo_empleado');
    }
    
    public function Login()
    {
        return $this->belongsTo('App\Login');
    }
}
