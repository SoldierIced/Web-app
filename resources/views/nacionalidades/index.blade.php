@extends('welcome')
@section('titulo')
Usuarios
@endsection
@section('content')
<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Desde aqui podra ver, editar y eliminar las Nacionalidades</h5>
      </div>
      <div class="card-body">
        <table class="table table-white">
          <thead class="thead-darl">
            <tr>
              <th>ID</th>
              <th style="width:80%">Descripcion</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
           @foreach ($nacionalidades as $nacionalidad)
           <tr>
            <td>{{$nacionalidad->id}}</td>
            <td>{{$nacionalidad->descripcion}}</td>
            <td>
                <a class="btn btn-danger" href="{{route("nacionalidades.delete",$nacionalidad->id)}}" role="button">Eliminar</a>
                <button type="button" class="btn btn-info editarnacionalidad" nacionalidad="{{$nacionalidad->id}}" data-toggle="modal" data-target="#nacionalidadupdate">Editar</button>
            </td>
          </tr>
           @endforeach
          </tbody>
        </table>

    </div>
    </div>
  </div>
    @include('nacionalidades.editar')
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
