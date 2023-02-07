@extends('layouts.app')
@section('content')
<div class="container">
    <div id="citas">
    </div>

<!-- Modal trigger button -->
<button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#evento">
  Launch
</button>

<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade "  id="evento" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Asignación de citas Veterinarias</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form action="">
                    <div class="form-group">
                      <label for="id" class="form-label">ID:</label>
                      <input type="text" name="id" id="id" class="form-control" placeholder="id" aria-describedby="helpId">
                      <small id="helpId" class="text-muted"></small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Titulo</label>
                      <input type="text" name="title" id="title" class="form-control" value="Cita Viterinaria" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Cita Veterinaria</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Nombre Usuario</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">nombre y apellido del cliente</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Documento de identidad</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Numero de celular</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">Help text</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Email</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">correo electronico</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Nombre de la Mascota</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">nombre y apellido de la Mascota ;)</small>
                    </div>
                    <div class="form-group">
                      <label for="" class="form-label">Tipo de Mascota</label>
                      <input type="text" name="" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="start" class="form-label">start</label>
                      <input type="text" name="start" id="start" class="form-control" placeholder="start" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">inicio del evento</small>
                    </div>
                    <div class="form-group">
                      <label for="end" class="form-label">end</label>
                      <input type="text" name="end" id="end" class="form-control" placeholder="end" aria-describedby="helpId">
                      <small id="helpId" class="text-muted">fin del evento</small>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" id="btnActualizar">Actualizar</button>
                <button type="button" class="btn btn-success" id="btnGuardar">Guardar</button>
                <button type="button" class="btn btn-danger" id="btnBorrar">Borrar</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

            </div>
        </div>
    </div>
</div>
</div>

<!-- Optional: Place to the bottom of scripts -->
<script>
    const evento = new bootstrap.Modal(document.getElementById('evento'), options)

</script>
@endsection
