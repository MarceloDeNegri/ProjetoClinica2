<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

    protected $table = 'medicos';

    protected $fillable = [
        'crm',
        'especializacao_id',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
    public function especializacao(){
        return $this->belongsTo('App\Especializacao');
    }
    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }

}