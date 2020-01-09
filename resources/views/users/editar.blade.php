<!-- Modal -->
<div class="modal fade" id="userupdate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{url('users_save')}}" id="myForm" role="form" data-toggle="validator" method="post">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{ csrf_field() }}
            <div class="modal-content">
                <input class="form-control" type="text" name="id" id="edit_user"  value="">

                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body" id="userbody">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Nombre:</span>
                        </div>
                        <input class="form-control" type="text" name="nombre" id="edit_nombre"  value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Apellido:</span>
                        </div>
                        <input class="form-control" type="text" name="apellido" id="edit_apellido"  value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Username:</span>
                        </div>
                        <input class="form-control" type="text" name="username" id="edit_username"  value="">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Email:</span>
                        </div>
                        <input class="form-control" type="text" name="email" id="edit_email"  value="">
                    </div>
                    <div class="form-group">
                        <label >Nacionalidad</label>
                        <select  class="form-control" name="nacionalidad" id="edit_nacionalidad" style="height:45px">
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

function cargarselector(user){
    $.ajax({
        type: 'GET',
        url: "{{url("api/nacionalidades_user")}}/"+user,
        data: {
        },
        success: function(nacionalidades){
            var contenido="";
            nacionalidades.forEach(function(item){
                if(item.select==true)
                contenido+="<option value='"+item.id+"' selected>"+item.descripcion+"</option>";
                else
                contenido+="<option value='"+item.id+"'>"+item.descripcion+"</option>";
              });

              $("#edit_nacionalidad").html(contenido);
        }
    });

}

        $(document).on("click", ".editaruser" , function() {
            var id = $(this).attr('user');
            $.ajax({
                type: 'GET',
                url: "{{url("api/users")}}/"+id,
                data: {
                },
                success: function(user){
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
