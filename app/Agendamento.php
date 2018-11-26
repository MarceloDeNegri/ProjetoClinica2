<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Datetime;
use App\User;

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
        'UC_Agendamento',

    ];
    public function user(){
        return $this->belongsTo('App\User','paciente_id');
    }
    public function userm(){
        return $this->belongsTo('App\User','medico_id');
    }
    public function convenio(){
        return $this->belongsTo('App\Convenio','convenio_id');
    }
    public function atendimentos(){
        return $this->hasMany('App\Atendimento');
    }

    public static function GetAllByMedico($medicoId){
        return Agendamento::where('medico_id', $medicoId)->orderBy('id','desc')->paginate(5);
    }
    public static function GetAllByPaciente($pacienteId){
        return Agendamento::where('paciente_id', $pacienteId)->paginate(5);
    }
    public function dtConsultaForms()
    {
        $dateTime = new DateTime($this->dtConsulta);
        $date = $dateTime->format('Y-m-d');
        $time = $dateTime->format('H:i:s');
        return $date;
    }


}
