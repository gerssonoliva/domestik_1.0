<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Servicio extends Model
{
    use SoftDeletes; 
    protected $table = 'servicios';
    protected $fillable = ["nombre",
                            "costo"];
    
    public function Cliente_servicio()
    {
        return $this->hasMany('App\Cliente_servicio');
    }

}
