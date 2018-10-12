<?php include('config/navigation.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- PERSONAL -->
  <link rel="stylesheet" href="assets/css/site.css">
  <?php include('global/external-css.html') ?>
  <title><?php print $PAGE_TITLE;?> - American Black </title>
</head>
<body>
  <?php include('global/navbar.php'); ?>
  
  <form class="form" action="php/signup.php" method="post">
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div class="form-group">
      <label for="apellido">Apellido</label>
      <input type="text" name="apellido" id="apellido" class="form-control">
    </div>
    <div class="form-group">
      <label for="direccion">Direcci&oacute;n</label>
      <input type="text" name="direccion" id="direccion" class="form-control">
    </div>
    <div class="form-group">
      <label for="telefono">Tel&eacute;fono</label>
      <input type="number" name="telefono" id="telefono" class="form-control">
    </div>
    <div class="form-group">
      <label for="Correo">Correo Electr&oacute;nico</label>
      <input type="email" name="Correo" id="Correo" class="form-control">
    </div>
    <div class="form-group">
      <label for="contrasena">Contraseña</label>
      <input type="password" name="contrasena" id="contrasena" class="form-control">
    </div>
    <div class="form-group">
      <label for="ccontrasena">Confirmar Contraseña</label>
      <input type="password" name="ccontrasena" id="ccontrasena" class="form-control" onkeyup="validatePassword()">
      <br>
      <div id="helpId" class="alert alert-danger" role="alert" style="display: none">
        Las contraseñas deben ser iguales
      </div>
    </div>
    
    <div class="submit-button">
      <button type="submit" class="btn btn-primary">
        Enviar <i class="fas fa-sign-in-alt fa-sm fa-fw"></i>
      </button>
    </div>
  </form>
  <br><br><br>
  <?php 
    include('global/footer.php');
    include('login.php');
    include('global/external-js.html');
  ?>
  <script src="assets/js/site.js"></script>
</body>
</html>