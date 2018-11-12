<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\Atendimento;
use App\Http\Requests\AtendimentoRequest;

class UserMedicoController extends Controller
{
    private $totalPage = 2;
    public function indexAgenda(){
        $agendamentos = Agendamento::orderBy('id','desc')->paginate($this->totalPage);
        return view('umedicos.indexAgenda', ['umedicos.indexAgenda'=>$agendamentos]);
    }

    public function indexAtendimento(){

        $atendimentos = Atendimento::orderBy('id','desc')->paginate($this->totalPage);
        return view('umedicos.indexAtendimento', ['atendimentos'=>$atendimentos]);
    }

    public function create($id){
        $agendamento = Agendamento::find($id);
        if($agendamento){

            return view('umedicos.create', ['agendamento'=> $agendamento]);
        }

        return redirect()->route('umedicos.indexAtendimento');
    }

    public function store(AtendimentoRequest $request){
        $novo_atendimento = $request->all();
        Atendimento::create($novo_atendimento);
        flash('Dados Cadastrados')->success();
        return redirect()->route('umedicos.indexAtendimento');

    }
}
