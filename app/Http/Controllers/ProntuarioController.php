<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prontuario;
use App\Atendimento;
use App\Http\Requests\ProntuarioRequest;

class ProntuarioController extends Controller
{
    private $totalPage = 2;

    public function index(){
        $prontuarios = Prontuario::paginate($this->totalPage);
        return view('prontuarios.index', ['prontuarios'=>$prontuarios]);
    }

    public function create($id){
        $atendimento = Atendimento::find($id);
        if($atendimento){

            return view('prontuarios.create', ['atendimento'=> $atendimento]);
        }

        return redirect()->route('prontuarios');
    }

    public function store(ProntuarioRequest $request){
        $novo_prontuario = $request->all();
        Prontuario::create($novo_prontuario);
        flash('Prontuario preenchido com Sucesso')->success();
        return redirect()->route('prontuarios');

    }
    public function destroy($id){
        $prontuario = Prontuario::find($id);
        if($prontuario->atendimento->agendamento->paciente->status == 'I'){
            $prontuario->delete();
            flash('Prontuario Excluido com Sucesso')->success();
            return redirect()->route('prontuarios');
        }else {
            flash('Prontuario não pode ser excluido pois paciente está ativo')->error();
            return redirect()->route('prontuarios');
        };

    }

    public function edit($id){
        $atendimento = Atendimento::find($id);
        $prontuario = Prontuario::find($id);
         return view('prontuarios.edit', compact('prontuario'), ['atendimento'=> $atendimento]);
     }

     public function update(ProntuarioRequest $request, $id){
        Prontuario::find($id)->update($request->all());
         return redirect()->route('prontuarios');
     }
}
