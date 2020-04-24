<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'tipo_empleados_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Empleado()
    {
        return $this->hasOne('App\Empleado');
    }

    public function Cliente()
    {
        return $this->hasOne('App\Cliente');
    }

    /*ROLES*/
    public function Tipo_empleado()
    {
        return $this->belongsTo('App\Tipo_empleado');
    }

    public function esAdmin(){
        $user = Auth::user();
        if($user->tipo_empleados_id == 2){
            return true;
        }else{
            return false;
        }
    }

    public function esCliente(){
        $user = Auth::user();
        if($user->tipo_empleados_id == 6){
            return true;
        }else{
            return false;
        }
    }
}
