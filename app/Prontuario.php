<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prontuario extends Model
{
    protected $table = 'prontuarios';

    protected $fillable = [
        'peso',
        'altura',
        'idade',
        'observacao',
        'alimentacao',
        'febre',
        'dores',
        'atendimento_id'

    ];
    public function atendimento(){
        return $this->belongsTo('App\Atendimento','atendimento_id');
    }
    public static function GetAllByMedico($medicoId){
        return Prontuario::where('atendimento_id')->whereor ('agendamento_id')->whereor('medico_id', $medicoId)->paginate(5);
    }
    public static function GetAllByPaciente($pacienteId){
        return Prontuario::where('paciente_id', $pacienteId)->paginate(5);
    }

}
