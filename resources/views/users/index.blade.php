@extends('welcome')
@section('titulo')
Usuarios
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Desde aqui podra ver, editar y eliminar los usuarios</h5>
      </div>
      <div class="card-body">
        <table class="table table-dark">
          <thead class="thead-light">
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Email</th>
              <th>Nacionalidad</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($users as $user)
           <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->username}}</td>
            <td>{{$user->nombre}}</td>
            <td>{{$user->apellido}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->Nacionalidad->descripcion}}</td>
            <td>
                <a class="btn btn-danger" href="{{route("users.delete",$user->id)}}" role="button">Eliminar</a>
                <button type="button" class="btn btn-info">Editar</button>
            </td>
          </tr>
           @endforeach
          </tbody>
        </table>

    </div>
    </div>
  </div>
  @endsection

  @section('extraJS')

  @endsection
