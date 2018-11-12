<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicoRequest;
use App\Medico;
use App\Especializacao;
use App\Tipo;
use App\User;

class MedicoController extends Controller
{

    private $totalPage = 2;

    public function index(){
        $medicos = Medico::with("especializacoes")->paginate($this->totalPage);
        return view('medicos.index', ['medicos'=>$medicos]);
    }

    public function create(){
        return view('medicos.create');
    }

    public function store(MedicoRequest $request){

        $novo_medico = $request->all();
        Medico::create($novo_medico);

        return redirect()->route('medicos');
    }

    public function destroy($id){
        Medico::find($id)->delete();
        return redirect()->route('medicos');
    }

    public function edit($id){
        $medico = Medico::find($id);
         return view('medicos.edit', compact('medico'));
     }

     public function update(MedicoRequest $request, $id){
        Medico::find($id)->update($request->all());
         return redirect()->route('medicos');
     }
     public function createMaster(){
        return view('medicos.masterDetail');
    }

    public function masterDetail(Request $request){
        $medico = Medico::create([
                            'nome' => $request->get('nome'),
                            'crm' => $request->get('crm'),
                            'user_id' => $request->get('user_id')

            ]);
        $itens = $request->itens;
        foreach($itens as $key => $value) {
            Tipo::create([
                'medico_id' => $medico->id,
                'especializacao_id' => $itens[$key]

            ]);
        }
         return redirect()->route('medicos');
     }
}
