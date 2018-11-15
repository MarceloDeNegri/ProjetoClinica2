<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use \Datetime;

class Paciente extends Model
{
    protected $table = 'pacientes';

    protected $fillable = [
    'nome',
    'dtNascimento',
    'status',
    'tipoSanguineo',
    'alergico',
    'responsavel_id'];

    public function responsavel(){
        return $this->belongsTo('App\Responsavel','responsavel_id');
    }
    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }


public function dtNascimentoForms()
{
    $dateTime = new DateTime($this->dtNascimento);
    $date = $dateTime->format('Y-m-d');
    $time = $dateTime->format('H:i:s');
    return $date;
}

}
