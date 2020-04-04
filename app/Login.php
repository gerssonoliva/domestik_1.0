<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Login extends Model
{
    protected $table = "logins";
    use SoftDeletes;
    protected $fillable = ["usuario",
                        "contra",
                        "foto",
                        "estado",
                        "descripcion"];

    public function Empleado()
    {
        return $this->hasOne('App\Empleado');
    }

    public function Cliente()
    {
        return $this->hasOne('App\Cliente');
    }
   
}
