<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Convenio;
use App\Http\Requests\ConvenioRequest;

class ConvenioController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $convenios = Convenio::find($id);
        return view('convenios.delete', ['convenios'=>$convenios]);
        }

    public function index(){
        $convenios = Convenio::paginate($this->totalPage);
        return view('convenios.index', ['convenios'=>$convenios]);
    }

    public function create(){
        return view('convenios.create');
    }

    public function store(ConvenioRequest $request){
        $novo_convenio = $request->all();
        Convenio::create($novo_convenio);
        flash('Convenio feito com Sucesso')->success();
        return redirect()->route('convenios');

    }
    public function destroy($id){
        $convenio = Convenio::find($id);
            $convenio->delete();
            flash('Convenio Excluido com Sucesso')->success();
            return redirect()->route('convenios');

    }

    public function edit($id){
        $convenio = Convenio::find($id);
         return view('convenios.edit', compact('convenio'));
     }

     public function update(ConvenioRequest $request, $id){
        Convenio::find($id)->update($request->all());
         return redirect()->route('convenios');
     }
}

