<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $table = 'atendimentos';

    protected $fillable = [
        'hora_inicio',
        'hora_fim',
        'agendamento_id'

    ];
    public function agendamento(){
        return $this->belongsTo('App\Agendamento','agendamento_id');
    }
    public function anexo(){
        return $this->belongsTo('App\Anexo');
    }

}
