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
                'errores' => 'No se permite una nacionalidad con la descripcion vacia'
            ], 404);
        }

    }
    public function delete( $id)
    {
        $nacionalidad = Nacionalidad::findOrFail($id);
        $aux=$nacionalidad;
        $nacionalidad->delete();

        return response()->json([
            'mensaje' => "Nacionalidad borrada correctamente",
            'user'=>$nacionalidad
        ], 200);
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

     public function update(Request $request, $id)
    {
        if($request->descripcion==""){
            return response()->json([
            'errores' => 'No se permite una nacionalidad con la descripcion vacia'
            ], 404);
        }
        $nacionalidades = Nacionalidad::findOrFail($id);
        $nacionalidades->update($request->all());
        return response()->json([
            'mensaje' => 'Nacionalidad actualizada correctamente.'
        ], 200);
    }
}
