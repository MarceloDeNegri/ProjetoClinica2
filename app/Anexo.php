<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anexo extends Model
{
    protected $table = 'anexos';

    protected $fillable = [
        'anexo',
        'descricao',


    ];
    public function atendimento(){
        return $this->hasMany('App\Atendimento');
    }
}
