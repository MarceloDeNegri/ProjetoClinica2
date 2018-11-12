<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prontuario;

class UserResponsavelController extends Controller
{
    private $totalPage = 2;

    public function indexProntuario(){
        $prontuarios = Prontuario::paginate($this->totalPage);
        return view('prontuarios.index', ['prontuarios'=>$prontuarios]);
    }
    public function search(Request $request){

        $idade = $request->get('idade');
        $altura = $request->get('altura');
        $peso = $request->get('peso');

        if(($idade != null)&&($altura == null)&&($peso == null)){
            $prontuarios = Prontuario::where('idade', $idade)->paginate($this->totalPage);
        }
        if(($idade != null)&&($altura != null)&&($peso == null)){
            $prontuarios = Prontuario::where('idade', $idade)->paginate($this->totalPage);
            $prontuarios = Prontuario::where('altura', $altura)->paginate($this->totalPage);
        }

        if(($idade == null)&&($altura != null)&&($peso == null)){
            $prontuarios = Prontuario::where('altura', $altura)->paginate($this->totalPage);
        }
        if(($idade != null)&&($altura != null)&&($peso != null)){
            $prontuarios = Prontuario::where('idade', $idade)->paginate($this->totalPage);
            $prontuarios = Prontuario::where('altura', $altura)->paginate($this->totalPage);
            $prontuarios = Prontuario::where('peso', $peso)->paginate($this->totalPage);
        }
        if(($idade == null)&&($altura != null)&&($peso != null)){
            $prontuarios = Prontuario::where('altura', $altura)->paginate($this->totalPage);
            $prontuarios = Prontuario::where('peso', $peso)->paginate($this->totalPage);
        }
        if(($idade != null)&&($altura == null)&&($peso != null)){
            $prontuarios = Prontuario::where('altura', $altura)->paginate($this->totalPage);
            $prontuarios = Prontuario::where('peso', $peso)->paginate($this->totalPage);
        }

        if(($idade == null)&&($altura == null)&&($peso != null)){
            $prontuarios = Prontuario::where('peso', $peso)->paginate($this->totalPage);
        }
        if(($idade == null)&&($altura == null)&&($peso == null)){
            $prontuarios = Prontuario::paginate($this->totalPage);
        }
        return view('prontuarios.index', ['prontuarios'=>$prontuarios]);
    }
    public function destroy($id){
        $prontuario = Prontuario::find($id);
        if($prontuario->atendimento->agendamento->paciente->status == 'I'){
            $prontuario->delete();
            flash('Prontuario Excluido com Sucesso')->success();
            return redirect()->route('prontuarios');
        }else {
            flash('Prontuario não pode ser excluido pois paciente está ativo')->error();
            return redirect()->route('prontuarios');
        };

    }
}
