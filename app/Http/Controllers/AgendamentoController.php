<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\Http\Requests\AgendamentoRequest;

class AgendamentoController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $agendamentos = Agendamento::find($id);
        return view('agendamentos.delete', ['agendamentos'=>$agendamentos]);
        }

    public function index(){
        $agendamentos = Agendamento::orderBy('id','desc')->paginate($this->totalPage);
        return view('agendamentos.index', ['agendamentos'=>$agendamentos]);
    }

    public function create(){
        return view('agendamentos.create');
    }

    public function store(AgendamentoRequest $request){
        $novo_agendamento = $request->all();
        Agendamento::create($novo_agendamento);
        flash('Agendamento feito com Sucesso')->success();
        return redirect()->route('agendamentos');

    }
    public function destroy($id){
        $agendamentos = Agendamento::find($id);
        flash('Agendamento excluido com Sucesso')->error();
        return view('agendamentos.delete', ['agendamentos'=>$agendamentos]);

    }

    public function edit($id){
        $agendamento = Agendamento::find($id);
         return view('agendamentos.edit', compact('agendamento'));
     }

     public function update(AgendamentoRequest $request, $id){
        Agendamento::find($id)->update($request->all());
         return redirect()->route('agendamentos');
     }
}

