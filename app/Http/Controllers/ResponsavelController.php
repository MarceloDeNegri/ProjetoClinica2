<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsavel;
use App\Paciente;
use App\User;
use App\Http\Requests\ResponsavelRequest;

class ResponsavelController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $responsaveis = Responsavel::find($id);
        return view('responsaveis.delete', ['responsaveis'=>$responsaveis]);
        }

    public function index(){
        $responsaveis = Responsavel::paginate($this->totalPage);;
        return view('responsaveis.index', ['responsaveis'=>$responsaveis]);
    }

    public function create(){
        return view('responsaveis.create');
    }

    public function store(ResponsavelRequest $request){

        $novo_responsavel = $request->all();
        Responsavel::create($novo_responsavel);

        return redirect()->route('responsaveis');
    }

    public function destroy($id){
        Responsavel::find($id)->delete();
        flash('Responsavel Excluido com Sucesso')->error();
        return redirect()->route('responsaveis');
    }

    public function edit($id){
        $responsavel = Responsavel::find($id);
         return view('responsaveis.edit', compact('responsavel'));
     }

     public function update(ResponsavelRequest $request, $id){
        Responsavel::find($id)->update($request->all());
         return redirect()->route('responsaveis');
     }
}

