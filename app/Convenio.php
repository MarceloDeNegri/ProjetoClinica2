<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenios';

    protected $fillable = [
        'nome',
        'numero',
        'plano',
        'valor',

    ];

    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }
}
