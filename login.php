<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar Sesi&oacute;n</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="php/login.php">
          <div class="form-group">
            <label for="correo">Correo Electr&oacute;nico</label>
            <input type="email" class="form-control" id="correo" name="correo" autocomplete="off">
          </div>
          <div class="form-group">
            <label for="contrasena">Contrase&ntilde;a</label>
            <input type="password" class="form-control" id="contrasena" name="contrasena">
          </div>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-sign-in-alt fa-sm fa-fw"></i> Ingresar
          </button>
        </form>
      </div>
    </div>
  </div>
</div>