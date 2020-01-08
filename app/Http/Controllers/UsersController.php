<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use  App\Api\UsersController as api;
class UsersController extends Controller
{
    public function index(){

        $users = User::orderby('id')->get();

        return view ('users.index')
        ->with('users',$users);
    }

    public function delete($id){
        $User = User::find($id);
        if($User!=null){
            $User->delete();
            Session::put('msj','Usuario borrado correctamente.');
        }
        else {
            Session::put('err','No se Encontro dicho usuario.');

        }
            return redirect()->route('users');


    }
}
