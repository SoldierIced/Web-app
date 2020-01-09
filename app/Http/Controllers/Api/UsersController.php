<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Nacionalidad;

class UsersController extends Controller
{

    public function validator(Request $req){
        $error=[];
        if($req->nombre =="")
            $error[]="No se permiten nombres vacios.";
        if($req->username =="")
            $error[]="No se permiten usernames vacios.";
        if($req->apellido =="")
            $error[]="No se permiten apellidos vacios.";

       $exist = User::where('email',$req->email)->first();
            if($req->email =="" ){
                $error[]="No se permite un email vacio.";
            }elseif($exist!=null)
            $error[]="Email en uso.";

        return $error;
    }
    public function index()
    {
        return User::all();
    }

    public function show($id)
    {
        return User::find($id);
    }

    public function asignar_nacionalidad(Request $req){
    $user =User::find($req->user);
    $nacionalidad =Nacionalidad::find($req->nacionalidad);
    if($user != null && $nacionalidad != null){
        $user->nacionalidad_id = $nacionalidad->id;
        $user->save();
        $user->nacionalidad;
        return response()->json([
            'mensaje' => "Nacionalidad agregada correctamente",
            'user'=>$user
        ], 200);
    }
    else {
        $error=[];
        if($user == null){
            $error[]="Usuario no encontrado";
        }
        if($nacionalidad == null){
            $error[]="Nacionalidad no encontrada";
        }
        return response()->json([
            'errores' =>$error
        ], 404);
    }


    }


    public function store(Request $request)
    {
        $error= $this->validator($request);
        if(count($error)==0)
        return response()->json([
            'mensaje' => "Usuario dado de alta correctamente",
            'user'=>User::create($request->all())
        ], 200);

        else
        return response()->json([
            'errores' => $error
        ], 404);

    }

    public function update(Request $request, $id)
    {

        $User = User::findOrFail($id);
        if($request->email != $User){
            $duplicado = User::where('email',$request->email)->where('id','!=',$id)->first();
            if($duplicado!=null){
                return response()->json([
                    'errores' => 'Email en uso'
                ], 404);
            }
        }
        $User->update($request->all());
        if(isset($request->nacionalidad)){

            $User->nacionalidad_id=$request->nacionalidad;
            $User->save();
        }
        return response()->json([
            'mensaje' => 'Usuario actualizado correctamente.'
        ], 200);
    }

    public function delete( $id)
    {
        $User = User::findOrFail($id);
        $aux=$User;
        $User->delete();

        return response()->json([
            'mensaje' => "Usuario borrado correctamente",
            'user'=>$aux
        ], 200);
    }



}
