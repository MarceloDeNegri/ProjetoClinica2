<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Paciente;
use App\Http\Requests\PacienteRequest;
use App\User;

class PacienteController extends Controller
{
    private $totalPage = 1;

    public function delete($id){
        $pacientes = Paciente::find($id);
        return view('pacientes.delete', ['pacientes'=>$pacientes]);
        }

    public function index(){
        $pacientes = Paciente::paginate($this->totalPage);
        return view('pacientes.index', ['pacientes'=>$pacientes]);
    }

    public function create(){
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request){
        $novo_paciente = $request->all();
        Paciente::create($novo_paciente);

        return redirect()->route('pacientes');
    }

    public function destroy($id){
        $paciente = Paciente::find($id);
        if($paciente->status == 'I'){
            $paciente->delete();
            flash('Paciente Excluido com sucesso!')->success();
            return redirect()->route('pacientes');
        }else {
            flash('Paciente não pode ser excluido pois está Ativo!')->error();
            return redirect()->route('pacientes');
        };
    }

    public function edit($id){
        $paciente = Paciente::find($id);
         return view('pacientes.edit', compact('paciente'));
     }

     public function update(PacienteRequest $request, $id){
        Paciente::find($id)->update($request->all());
         return redirect()->route('pacientes');
     }
}
