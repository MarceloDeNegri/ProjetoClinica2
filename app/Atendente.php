<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atendente extends Model
{
    protected $table = 'atendentes';

    protected $fillable = [
        'dtAdmissao',
        'cracha',
        'user_id',

    ];
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
    public function agendamento(){
        return $this->hasMany('App\Agendamento');
    }
}
