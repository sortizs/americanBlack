<?php
  include('config/navigation.php');
  include('php/usuarios.php');
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

  <div class="m-5">
    <h1>Usuarios de la aplicaci&oacute;n</h1>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre Completo</th>
          <th scope="col">Tel&eacute;fono</th>
          <th scope="col">Correo</th>
          <th scope="col">Rol</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($usuario = mysqli_fetch_array($result)){
          echo '<tr>';
          echo "<td>{$usuario['nombre']} {$usuario['apellido']}</td>";
          echo "<td>{$usuario['telefono']}</td>";
          echo "<td>{$usuario['correo']}</td>";
          echo "<td>{$usuario['descripcion']}</td>";
          echo '</tr>';
        }
      ?>
        <!-- <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
        </tr> -->
      </tbody>
    </table>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>