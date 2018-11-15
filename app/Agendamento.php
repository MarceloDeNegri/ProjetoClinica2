<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{

    protected $table = 'agendamentos';

    protected $fillable = [
        'dtConsulta',
        'hora',
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
    public function atendimentos(){
        return $this->hasMany('App\Atendimento');
    }

    public static function GetAllByMedico($medicoId){
        return Agendamento::where('medico_id', $medicoId)->paginate(5);
    }

}
