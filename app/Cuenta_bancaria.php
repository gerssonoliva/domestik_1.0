<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Cuenta_bancaria extends Model
{
    protected $table = "cuenta_bancarias";
    use SoftDeletes;
    protected $fillable = ["bancos_id",
                            "nro_cuenta"];

    public function Banco()
    {
        return $this->belongsTo('App\Banco');
    }
}
