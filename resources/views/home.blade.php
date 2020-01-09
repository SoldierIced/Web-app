@extends('welcome')
@section('titulo')
Home
@endsection
@section('content')


<div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h5 class="card-title">Aplicacion pedida por Pablo Liberato</h5>
      </div>
      <div class="card-body">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Consignas</h5>
                <p>Desarrollar una web-app basada en Laravel que responda a los siguientes servicios:</p>

                <p>1- addUser (POST): Username, Nombre, Apellido, Email, Nacionalidad. Almacenarlo en MySQL.</p>

                <p>2- delUser (DELETE)</p>

                <p>3- getUsers (GET)</p>

                <p>4- updateUser (PUT)</p>

                <p>5- a cada usuario se le asocia una nacionalidad, la cual permitirá saber cuántos usuarios hay de cada país (generar entre 20 y 40 usuarios y un máximo de 6 nacionalidades).</p>

                <p>6- adicional al ítem anterior, levantar una vista que consuma dichos servicios y presente lo siguiente:</p>

                <p>Panel de navegación.<br>
                Listado de usuarios ingresados.<br>
                Formulario para la búsqueda, alta, baja y modificación de usuarios.</p>
                <p class="card-text">Hecha por Nehuen Fortes nehuenfortes@hotmail.com</p>


            </div>
        </div>
      </div>
    </div>
</div>
</div>
@endsection
