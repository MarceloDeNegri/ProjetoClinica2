<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{

    protected $table = 'medicos';

    protected $fillable = [
        'nome',
        'crm',
        'user_id',

    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }


    public function especializacoes(){
        return $this->belongsToMany("App\Especializacao", "tipos");
    }

}
