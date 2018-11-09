<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class especializacao extends Model
{
    protected $table = 'especializacoes';

    protected $fillable = [
        'nome',
        'descricao',

    ];

    public function medico(){
        return $this->hasMany('App\Medico');
    }
}
