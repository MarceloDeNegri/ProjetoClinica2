<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{

    protected $table = 'agendamentos';

    protected $fillable = [
        'dtConsulta',
        'valor',
        'condicao',
        'paciente_id',
        'medico_id',
        'convenio_id',

    ];
    public function paciente(){
        return $this->belongsTo('App\Paciente','paciente_id');
    }
    public function medico(){
        return $this->belongsTo('App\Medico','medico_id');
    }
    public function atendente(){
        return $this->belongsTo('App\Atendente','atendente_id');
    }
    public function convenio(){
        return $this->belongsTo('App\Convenio','convenio_id');
    }
    public function atendimento(){
        return $this->hasMany('App\Atendimento');
    }

}
