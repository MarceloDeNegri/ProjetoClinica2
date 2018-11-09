<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    protected $table = 'responsaveis';

    protected $fillable = ['user_id'];

    public function paciente(){
        return $this->hasMany('App\Paciente');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
