<?php
  include('config/navigation.php');
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
        include ('../config/conexion.php');

        $sql = "SELECT * FROM producto AS pr, tipo_producto AS tp WHERE pr.tipo_producto_id = tp.id";

        $result = mysqli_query($con, $sql);

        while ($producto = mysqli_fetch_array($result)){
          echo '<tr>';
          echo "<td>". ucfirst(strtolower($producto['nombre'])) ."</td>";
          echo "<td>{$producto['stock']}</td>";
          echo "<td>$". number_format($producto['valor']) . "</td>";
          echo "<td>". ucwords(strtolower($producto['descripcion'])) ."</td>";
          echo "<td class=\"btn-group\">".
                  // <a href=\"producto.php\" class=\"btn btn-info\">Editar</a>
                  "\t<a href=\"php/eliminar.php?id={$producto['id']}\" class=\"btn btn-outline-danger\">".
                  "<i class=\"fas fa-trash-alt fa-lg fa-fw\"></i></a></td>";
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