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
        <button type="button" class="btn btn-info " style="float:right" data-toggle="modal" data-target="#usernew">Nuevo Usuario</button>
        @include('users.nuevo')

        <table class="table table-white">
          <thead class="thead-darl">
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
                <button type="button" class="btn btn-info editaruser" user="{{$user->id}}" data-toggle="modal" data-target="#userupdate">Editar</button>
            </td>
          </tr>
           @endforeach
          </tbody>
        </table>

    </div>
    </div>
  </div>
    @include('users.editar')
  @endsection

  @section('extraJS')
  $('.table').DataTable({
    language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },
 });
  @endsection
