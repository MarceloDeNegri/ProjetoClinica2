<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = 'avaliacoes';

    protected $fillable = [
        'nota',
        'observacao',
        'atendimento_id',

    ];
    public function atendimento(){
        return $this->belongsTo('App\Atendimento','atendimento_id');
    }
}
