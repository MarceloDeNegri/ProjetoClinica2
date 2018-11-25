<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agendamento;
use App\Paciente;
use App\Http\Requests\AgendamentoRequest;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;

class AgendamentoController extends Controller
{
    private $totalPage = 10;



    public function delete($id){
        $agendamentos = Agendamento::find($id);
        return view('agendamentos.delete', ['agendamentos'=>$agendamentos]);
        }

    public function index(){

       $agendamentos = Agendamento::orderBy('id','desc')->paginate($this->totalPage);
         //$agendamentos = Auth::user()->agendamentos->paginate($this->totalPage);
       // $agendamentos = Agendamento::GetAllByMedico(Auth()->user()->where('id', Auth::id())->first()->id);
        //$agendamentos = Agendamento::GetAllByPaciente(Auth()->user()->where('id', Auth::id())->first()->id);
        return view('agendamentos.index', ['agendamentos'=>$agendamentos]);
    }

    public function indexMedico(){

        //$agendamentos = Agendamento::orderBy('id','desc')->paginate($this->totalPage);
          //$agendamentos = Auth::user()->agendamentos->paginate($this->totalPage);
         $agendamentos = Agendamento::GetAllByMedico(Auth()->user()->where('id', Auth::id())->first()->id);
         //$agendamentos = Agendamento::GetAllByPaciente(Auth()->user()->where('id', Auth::id())->first()->id);
         return view('agendamentos.indexMedico', ['agendamentos'=>$agendamentos]);
     }

    public function create(){
        return view('agendamentos.create');
    }

    public function store(AgendamentoRequest $request){
        try{
        $novo_agendamento = $request->all();
        //if(User::find($request->get('paciente_id'))->dtConsulta == $dtConsulta){
        Agendamento::create($novo_agendamento);
        flash('Agendamento feito com Sucesso')->success();
        return redirect()->route('agendamentos');
        }catch(QueryException $e){
        flash('Horario e médico indisponiveis para esta data ')->error();
        return redirect()->back();
       // }
    //else {
      //  flash('Agendamento não pode ser efetuado pois paciente está Inativo!')->error();
        //return redirect()->route('agendamentos');
    //}
    }
    }

    public function destroy($id){
        $agendamento = Agendamento::find($id);
        if($agendamento->user->status == 'I'){
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

