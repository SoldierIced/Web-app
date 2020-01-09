<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;
use  App\Http\Controllers\Api\UsersController as api;
class UsersController extends Controller
{
    public function index(){
        $api = new api();
        $users =  $api->index();
        return view ('users.index')
        ->with('users',$users);
    }

    public function delete($id){
        $api = new api();
        $data = $api->delete($id);
        if(isset($data->getData()->mensaje)){
            Session::put('msj',$data->getData()->mensaje);
        }
        else {
            Session::put('err','No se Encontro dicho usuario.');

        }
            return redirect()->route('users');


    }
    public function save(Request $re){
        $api = new api();
        $data =$api->update($re,$re->id);
        // dd($data);
        if(isset($data->getData()->mensaje)){
            Session::put('msj',$data->getData()->mensaje);
        }
        else {
            $errores = $data->getData()->errores;
            $aux="";
            foreach($errores as $err){
                $aux=$err.'<br>';
            }
            Session::put('err',$aux);
        }
           return redirect()->route('users');

    }
}
