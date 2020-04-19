<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    protected $table = "clientes";
    use SoftDeletes;
    protected $fillable = ["nombre",
                            "apellido",
                            "direcion",
                            "telefono",
                            "fecha_nac",
                            "correo",
                            "logins_id"];
    
    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
