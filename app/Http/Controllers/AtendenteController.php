<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atendente;
use App\Prontuario;
use App\Http\Requests\AtendenteRequest;

class AtendenteController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $atendentes = Atendente::find($id);
        return view('atendentes.delete', ['atendentes'=>$atendentes]);
        }

    public function index(){
        $atendentes = Atendente::paginate($this->totalPage);
        return view('atendentes.index', ['atendentes'=>$atendentes]);
    }

    public function create(){
        return view('atendentes.create');
    }

    public function store(AtendenteRequest $request){

        $novo_atendente = $request->all();
        Atendente::create($novo_atendente);

        return redirect()->route('prontuario.create');
    }

    public function destroy($id){
        Atendente::find($id)->delete();
        return redirect()->route('atendentes');
    }

    public function edit($id){
        $atendente = Atendente::find($id);
         return view('atendentes.edit', compact('atendente'));
     }

     public function update(AtendenteRequest $request, $id){
        Atendente::find($id)->update($request->all());
         return redirect()->route('atendentes');
     }
}

