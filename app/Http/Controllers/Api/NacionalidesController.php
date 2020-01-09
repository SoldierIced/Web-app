<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Nacionalidad;
use App\User;

class NacionalidesController extends Controller
{
    public function store(Request $request)
    {
        if($request->descripcion!=""){
            return response()->json([
                'mensaje' => "Nacionalidad dada de alta correctamente",
                'nacionalidad'=>Nacionalidad::create($request->all())
            ], 200);
        }
        else {
            return response()->json([
                'errores' => 'No se permiten nacionalidad con la descripcion vacia'
            ], 404);
        }

    }

    public function index()
    {
        return Nacionalidad::all();
    }
    public function get_users($user)
    {
        $user =User::find($user);
        $nacionalidades= Nacionalidad::all();
        foreach($nacionalidades as $nac){

            if($nac->id== $user->nacionalidad->id){
                $nac->select=true;
            }
            else
            $nac->select=false;
        }
        return
            $nacionalidades;
    }

    public function show($id)
    {
        return Nacionalidad::find($id);
    }
}
