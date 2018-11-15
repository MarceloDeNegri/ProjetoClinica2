<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atendimento;
use App\Agendamento;
use App\Http\Requests\AtendimentoRequest;

class AtendimentoController extends Controller
{
    private $totalPage = 2;

    public function index(){

        $atendimentos = Atendimento::orderBy('id','desc')->paginate($this->totalPage);
        return view('atendimentos.index', ['atendimentos'=>$atendimentos]);
    }

    public function create($id){
        $agendamento = Agendamento::find($id);
        if($agendamento){

            return view('atendimentos.create', ['agendamento'=> $agendamento]);
        }

        return redirect()->route('atendimentos');
    }

    public function store(AtendimentoRequest $request){
        $novo_atendimento = $request->all();
        $atendimento = Atendimento::create($novo_atendimento);
        flash('Dados Cadastrados')->success();
        return \Redirect::route('prontuarios.create', $atendimento->id);

    }

    public function destroy($id){
        $atendimento = Atendimento::find($id);
            $atendimento->delete();
            flash('Atendimento Excluido com Sucesso')->success();
            return redirect()->route('atendimentos');

    }

    public function edit($id){
        $agendamento = Agendamento::find($id);
        $atendimento = Atendimento::find($id);
         return view('atendimentos.edit', compact('atendimento'), ['agendamento'=> $agendamento]);
     }

     public function update(AtendimentoRequest $request, $id){
        Atendimento::find($id)->update($request->all());
         return redirect()->route('atendimentos');
     }
}
