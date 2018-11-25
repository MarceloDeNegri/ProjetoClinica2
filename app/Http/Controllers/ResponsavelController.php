<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsavel;
use App\Paciente;
use App\User;
use DB;
use Excel;
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
     public function importExportView(){

        return view('import_export');

    }

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function importFile(Request $request){
        //Você pode determinar se um arquivo está presente na solicitação usando o hasFile
        if($request->hasFile('sample_file')){
            // O método retorna uma instância da classe,
            //que estende a classe PHP e fornece uma variedade
            // de métodos para interagir com o arquivo:
            $path = $request->file('sample_file')->getRealPath();//O getRealPath()método usado para
                                                    //obter a localização atual do arquivo enviado.

            $data = \Excel::load($path)->get();//retorna uma quantidade de folhas ou linhas
                            //usa a primeira linha como (cabeçalho) o nome dos atributos da matriz resultante.


            //retorna o numero total de linhas
            if($data->count()){
                //loop foreach
                //onde a $ key serve como o índice para determinar o valor em vez de um número
                foreach ($data as $key => $value) {

                    $arr[] = ['nome' => $value->nome, 'sobrenome' => $value->sobrenome,'telefone' => $value->telefone ];

                }

                if(!empty($arr)){

                    DB::table('responsaveis')->insert($arr);

                    dd('Importação feita com sucesso.');

                }

            }

        }

        dd('Nenhum arquivo de importação solicitado.');

    }



    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function exportFile($type){

        $responsaveis = Responsavel::get()->toArray();


        //serve para criar uma nova folha dentro de um arquivo recém criado
        return \Excel::create('relatorio_responsavel', function($excel) use ($responsaveis) {

            $excel->sheet('sheet name', function($sheet) use ($responsaveis)



            {

                $sheet->fromArray($responsaveis);

            });

        })->download($type);

    }

}



