<!-- Modal -->
<div class="modal fade" id="nacionalidadupdate" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{url('nacionalidades_save')}}" id="myForm" role="form" data-toggle="validator" method="post">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            {{ csrf_field() }}
            <div class="modal-content">
                <input class="form-control" type="text" name="id" id="edit_nacionalidad"  value="">

                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Nacionalidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body" id="nacionalidadbody">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">ID:</span>
                        </div>
                        <input class="form-control" type="text" id="edit_id"  value="" disabled>
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Descripcion:</span>
                        </div>
                        <input class="form-control" type="text" name="descripcion" id="edit_descripcion"  value="">
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
        $(document).on("click", ".editarnacionalidad" , function() {
            var id = $(this).attr('nacionalidad');
            $.ajax({
                type: 'GET',
                url: "{{url("api/nacionalidades")}}/"+id,
                data: {
                },
                success: function(nacionalidad){
                    $("#edit_id").val(nacionalidad.id);
                    $("#edit_nacionalidad").val(nacionalidad.id);
                    $("#edit_descripcion").val(nacionalidad.descripcion);
                    cargarselector(id);

                }
            });
        });
    </script>
