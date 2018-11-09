<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Especializacao;
use App\Http\Requests\EspecializacaoRequest;

class EspecializacaoController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $especializacoes = Especializacao::find($id);
        return view('especializacoes.delete', ['especializacoes'=>$especializacoes]);
        }

    public function index(){
        $especializacoes = Especializacao::paginate($this->totalPage);
        return view('especializacoes.index', ['especializacoes'=>$especializacoes]);
    }

    public function create(){
        return view('especializacoes.create');
    }

    public function store(EspecializacaoRequest $request){
        $novo_especializacao = $request->all();
        Especializacao::create($novo_especializacao);
        flash('Especializacao feito com Sucesso')->success();
        return redirect()->route('especializacoes');

    }
    public function destroy($id){
        $especializacao = Especializacao::find($id);
            $especializacao->delete();
            flash('Especializacao Excluido com Sucesso')->success();
            return redirect()->route('especializacoes');

    }

    public function edit($id){
        $especializacao = Especializacao::find($id);
         return view('especializacoes.edit', compact('especializacao'));
     }

     public function update(EspecializacaoRequest $request, $id){
        Especializacao::find($id)->update($request->all());
         return redirect()->route('especializacoes');
     }
}

