<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Dompdf\Adapter\CPDF;
use Dompdf\Dompdf;
use Dompdf\Exception;

class UserController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $users = User::find($id);
        return view('users.delete', ['users'=>$users]);
        }

        public function relatorio(){
            $users = User::all();
            $pdf = \PDF::loadView('users.pdf',['users' => $users]);
            return $pdf->stream('user.pdf');
        }

    public function index(){
        $users = User::paginate($this->totalPage);
        return view('users.index', ['users'=>$users]);
    }
    public function indexPaciente(){
        $users = User::where('nivel_acesso', 3)->orderBy('name')->paginate($this->totalPage);
        return view('users.indexPaciente', ['users'=>$users]);
    }
    public function indexMedico(){
        $users = User::where('nivel_acesso', 2)->orderBy('name')->paginate($this->totalPage);
        return view('users.indexMedico', ['users'=>$users]);
    }
    public function indexAtendente(){
        $users = User::where('nivel_acesso', 1)->orderBy('name')->paginate($this->totalPage);
        return view('users.indexAtendente', ['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }
    public function createMedico(){
        return view('users.createMedico');
    }
    public function createPaciente(){
        return view('users.createPaciente');
    }

    public function store(Request $request){
            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required',

            ]);


        $user = User::create($request->all());
        $password = Hash::make($request->get('password'));
        $user->password = $password;
        $user->save();
        flash('Usuario feito com Sucesso')->success();
        return redirect()->route('users');
    }


    public function destroy($id){
        $user = User::find($id);
        if($user->status == 'I'){
            $user->delete();
            flash('Usuario Excluido com Sucesso')->success();
            return redirect()->route('users');
        }else {
            flash('Usuario não pode ser excluido pois paciente está ativo')->error();
            return redirect()->route('users');
        };

    }

    public function edit($id){
        $user = User::find($id);
         return view('users.edit', compact('user'));
     }

     public function update(Request $request, $id){
        User::find($id)->update($request->all());
         return redirect()->route('users');
     }
}


