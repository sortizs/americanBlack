<?php
  include('config/navigation.php');
  include('php/productos.php');
  setlocale(LC_MONETARY, 'en_US');
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
    <div class="row">
      <div class="col-md-6">
        <h1>Listado de productos</h1>
      </div>
      <div class="col-md-6" style="text-align: right; vertical-align: supper">
        <a href="nuevo.php" class="btn btn-primary">Agregar</a>
      </div>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Stock</th>
          <th scope="col">Valor</th>
          <th scope="col">Tipo</th>
          <th scope="col">Acciones</th>
        </tr>
      </thead>
      <tbody>
      <?php
        while($producto = mysqli_fetch_array($result)){
          echo '<tr>';
          echo "<td>{$producto['nombre']}</td>";
          echo "<td>{$producto['stock']}</td>";
          echo "<td>$". number_format($producto['valor']) . "</td>";
          echo "<td>{$producto['descripcion']}</td>";
          echo "<td class=\"btn-group\">
                  <a href=\"producto.php\" class=\"btn btn-info\">Editar</a>
                  <a href=\"eliminar.php\" class=\"btn btn-danger\">Eliminar</a>
                </td>";
          echo '</tr>';
        }
      ?>
      </tbody>
    </table>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>