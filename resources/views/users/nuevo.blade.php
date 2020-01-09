<!-- Modal -->
<div class="modal fade" id="usernew" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{url('users_nuevo')}}" id="myForm" role="form" data-toggle="validator" method="post">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{ csrf_field() }}
            <div class="modal-content">
                <input class="form-control" type="text" name="id" id="edit_user"  value="" hidden>

                <div class="modal-header">
                    <h5 class="modal-title">Nuevo Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body" id="userbody">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" name="nombre" id=""  value="" required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" name="apellido" id=""  value="" required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username:</span>
                        </div>
                        <input class="form-control" type="text" name="username" id=""  value="" required>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email:</span>
                        </div>
                        <input class="form-control" type="email" name="email" id=""  value="" required>
                    </div>
                    <div class="form-group">
                        <label >Nacionalidad</label>
                        <select  class="form-control" name="nacionalidad" id="nacionalidaddd" style="height:45px">
                            {{ $nacionalidades = App\Nacionalidad::all() }}
                            @foreach($nacionalidades as $nacionalidad)
                            <option value="{{$nacionalidad->id}}">{{ $nacionalidad->descripcion }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </form>

    </div>
</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>


    <script type="text/javascript">

        $(document).on("click", ".editaruser" , function() {
            var id = $(this).attr('user');
            $.ajax({
                type: 'GET',
                url: "{{url("api/users")}}/"+id,
                data: {
                },
                success: function(user){
                    console.log("modifico las variabless")
                    $("#edit_nombre").val(user.nombre);
                    $("#edit_apellido").val(user.apellido);
                    $("#edit_username").val(user.username);
                    $("#edit_email").val(user.email);
                    $("#edit_user").val(user.id);

                    cargarselector(id);

                }
            });
        });
    </script>
