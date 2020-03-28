<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//deleted_at
use Illuminate\Database\Eloquent\SoftDeletes;

class Banco extends Model
{
    protected $table = "bancos";
    use SoftDeletes;
    protected $fillable = ["nombre"];

    public function Cuenta_bancaria()
    {
        return $this->hasMany('App\Cuenta_bancaria');
    }
}
