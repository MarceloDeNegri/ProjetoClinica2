<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\Paciente;
use App\Http\Requests\AgendamentoRequest;
use App\User;
use Illuminate\Support\Facades\Auth;

class AgendamentoController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $agendamentos = Agendamento::find($id);
        return view('agendamentos.delete', ['agendamentos'=>$agendamentos]);
        }

    public function index(){
        $agendamentos = Agendamento::orderBy('id','desc')->paginate($this->totalPage);
        // $agendamentos = Auth::user()->agendamentos->paginate($this->totalPage);
        //$agendamentos = Agendamento::GetAllByMedico(Auth::user()->id);
        return view('agendamentos.index', ['agendamentos'=>$agendamentos]);
    }

    public function create(){
        return view('agendamentos.create');
    }

    public function store(AgendamentoRequest $request){
        $novo_agendamento = $request->all();
        if(Paciente::find($request->get('paciente_id'))->status == 'A'){
        Agendamento::create($novo_agendamento);
        flash('Agendamento feito com Sucesso')->success();
        return redirect()->route('agendamentos');
    }else {
        flash('Agendamento não pode ser efetuado pois paciente está Inativo!')->error();
        return redirect()->route('agendamentos');
    }}


    public function destroy($id){
        $agendamento = Agendamento::find($id);
        if($agendamento->paciente->status == 'I'){
            $agendamento->delete();
        flash('Agendamento Excluido com Sucesso')->success();
        return redirect()->route('agendamentos');
    }else {
        flash('Agendamento não pode ser excluido pois paciente está Ativo!')->error();
        return redirect()->route('agendamentos');
    }}

    public function edit($id){
        $agendamento = Agendamento::find($id);
         return view('agendamentos.edit', compact('agendamento'));
     }

     public function update(AgendamentoRequest $request, $id){
        Agendamento::find($id)->update($request->all());
         return redirect()->route('agendamentos');
     }
}

