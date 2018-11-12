<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    private $totalPage = 2;

    public function delete($id){
        $users = User::find($id);
        return view('users.delete', ['users'=>$users]);
        }

    public function index(){
        $users = User::paginate($this->totalPage);
        return view('users.index', ['users'=>$users]);
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        $user = User::create($request->all());
        $password = Hash::make($request->get('password');
        $user->password = $password;
        $user->save();
        flash('Usuario feito com Sucesso')->success();
        return redirect()->route('users');
    }


    public function destroy($id){
        $user = User::find($id);
            $user->delete();
            flash('Usuario Excluido com Sucesso')->success();
            return redirect()->route('users');

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


