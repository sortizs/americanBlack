<?php
  include('config/navigation.php');
  include('php/productos.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php include('../global/external-css.html') ?>
  <!-- PERSONAL -->
  <link rel="stylesheet" href="../assets/css/site.css">
  <title><?php print $PAGE_TITLE;?> - American Black </title>
</head>
<body>
  <?php
    include('global/navbar.php');
  ?>

  <div class="container main-container">
    <form class="form" action="php/agregar.php" method="post">
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="stock">Existencias</label>
        <input type="number" name="stock" id="stock" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" name="valor" id="valor" class="form-control" autocomplete="off">
      </div>
      <div class="form-group">
        <label for="genero">Genero</label>
        <select class="custom-select" name="genero" id="genero">
          <option value="1">Masculino</option>
          <option value="2">Femenino</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tipo">Tipo</label>
        <select class="custom-select" name="tipo" id="tipo">
          <?php
            while($tipo = mysqli_fetch_array($result_tipo)){
              echo "<option value=\"{$tipo['id']}\">". ucwords(strtolower($tipo['descripcion'])) ."</option>";
            }
          ?>
        </select>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="img" name="img">
        <label class="custom-file-label" for="img">Imagen</label>
      </div>
      <br><br>
      <div class="submit-button">
        <button type="submit" class="btn btn-primary">
          Enviar <i class="fas fa-sign-in-alt fa-sm fa-fw"></i>
        </button>
      </div>
    </form>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>