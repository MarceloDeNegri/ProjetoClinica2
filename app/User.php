<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','telefone','cpf','rg','nivel_acesso','dtNascimento','status',
    ];
    public function responsavel(){
        return $this->hasMany('App\Responsavel');
    }
    public function medico(){
        return $this->hasMany('App\Medico');
    }
    public function atendente(){
        return $this->hasMany('App\Atendente');
    }

    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
