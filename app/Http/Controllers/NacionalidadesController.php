<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Http\Controllers\Api\NacionalidesController as api;
use Illuminate\Support\Facades\Session;

class NacionalidadesController extends Controller
{
    public function index(){
        $api = new api();
        $nacionalidades =  $api->index();
        return view ('nacionalidades.index')
        ->with('nacionalidades',$nacionalidades);
    }
    public function delete($id){
        $api = new api();
        $data = $api->delete($id);
        if(isset($data->getData()->mensaje)){
            Session::put('msj',$data->getData()->mensaje);
        }
        else {
            Session::put('err','No se Encontro dicha nacionalidad.');

        }
            return redirect()->route('nacionalidades');
    }
    public function save(Request $re){
            $api = new api();
            $data =$api->update($re,$re->id);
            if(isset($data->getData()->mensaje)){
                Session::put('msj',$data->getData()->mensaje);
            }
            else {
                $errores = $data->getData()->errores;
                Session::put('err',$errores);
            }
               return redirect()->route('nacionalidades');
    }
}
