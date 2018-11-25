<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avaliacao;
use App\Atendimento;
use App\Http\Requests\AvaliacaoRequest;

class AvaliacaoController extends Controller
{
    private $totalPage = 2;

    public function index(){
        $avaliacoes = Avaliacao::paginate($this->totalPage);
        return view('avaliacoes.index', ['avaliacoes'=>$avaliacoes]);
    }

    public function create($id){
        $atendimento = Atendimento::find($id);
        if($atendimento){
        return view('avaliacoes.create', ['atendimento'=> $atendimento]);
    }

    return redirect()->route('avaliacoes');
    }

    public function store(AvaliacaoRequest $request){
        $novo_avaliacao = $request->all();
        Avaliacao::create($novo_avaliacao);
        flash('Avaliacao feito com Sucesso')->success();
        return redirect()->route('avaliacoes');

    }
    public function destroy($id){
        $avaliacao = Avaliacao::find($id);
            $avaliacao->delete();
            flash('Avaliacao Excluido com Sucesso')->success();
            return redirect()->route('avaliacoes');

    }

    public function edit($id){
        $avaliacao = Avaliacao::find($id);
         return view('avaliacoes.edit', compact('avaliacao'));
     }

     public function update(AvaliacaoRequest $request, $id){
        Avaliacao::find($id)->update($request->all());
         return redirect()->route('avaliacoes');
     }
}
