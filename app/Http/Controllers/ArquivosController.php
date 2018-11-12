<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Arquivo;
use Validation;
use Storage;
use App\Providers\Util;

class ArquivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['arquivos'] = Arquivos::all();
       return view('listagem',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $novo_arquivo = $request->all();
        Arquivo::create($novo_arquivo);

        return redirect()->route('atendentes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'arquivo' => 'required|mimes:jpeg,jpg,bmp,png,gif',

        ]);
        flash('Falha no arquivo')->error();
        if($request->file('arquivo')->isValid()){
            $ext = $request->file('arquivo')->getClientOriginalExtension();
            $arquivo = new Arquivos();
            $arquivo->url = $request->file('arquivo')->storeAs('imagens','arquivo.'.$ext,'local');
            $arquivo->save();

            flash('Arquivo enviado com Sucesso')->success();
        }
        return redirect()->back()->with('mensagem',$msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $arquivo = Arquivos::find($id);
        $data['arquivo'] = $arquivo;
        return view('edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $arquivo = Arquivos::find($id);
        $arquivo->descricao = $request->descricao;
        if($arquivo->save()){

        }
        return redirect()->route('lista');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = "Erro ao excluir o arquivo";
        $arq = Arquivos::find($id);
        $url = $arq->url;
        if(Arquivos::destroy($id)){
            Storage::disk('local')->delete($url);
            $msg = "Arquivo excluido com sucesso";
        }
        return redirect()->route('lista')->with('mensagem',$msg);

    }
}
