<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use \DateTime;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'telefone',
        'cpf',
        'rg',
        'nivel_acesso',
        'dtNascimento',
        'status',
        'crm',
        'especializacao_id',
        'cracha',
        'tratamento',
        'alergico',
        'convulsao',
        'diabete',
        'marcapasso',
        'tipoSanguineo',
        'responsavel_id',

    ];


    public function agendamentos(){
        return $this->hasMany('App\Agendamento');
    }

    public function especializacoes(){
        return $this->belongsTo('App\Especializacao','especializacao_id');
    }
    public function responsaveis(){
        return $this->belongsTo('App\Responsavel', 'responsavel_id');
    }
    public function dtNascimentoForms()
{
    $dateTime = new DateTime($this->dtNascimento);
    $date = $dateTime->format('Y-m-d');
    $time = $dateTime->format('H:i:s');
    return $date;
}
public function dtConsultaForms()
{
    $dateTime = new DateTime($this->dtConsulta);
    $date = $dateTime->format('Y-m-d');
    $time = $dateTime->format('H:i:s');
    return $date;
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
