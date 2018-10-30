<?php
  include('config/navigation.php');
  include('../config/validation.php');
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
    <div class="card-columns">
    <?php
      include ('../config/conexion.php');

      $sql = "SELECT pr.id, pr.nombre, pr.stock, pr.valor, pr.img, tp.descripcion AS tipo, gn.descripcion AS genero FROM producto AS pr, tipo_producto AS tp, genero AS gn WHERE pr.genero = gn.id AND pr.tipo_producto_id = tp.id";
      $query = $con->query($sql);
      
      while ($producto = mysqli_fetch_array($query)){
    ?>
      <div class="card">
        <img class="card-img-top" src="../images/<?php print $producto['img'] ?>" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">
            <?php print $producto['nombre']?>
            <small><?php print ucfirst(strtolower($producto['genero'])) ?></small>
          </h5>
          <p class="card-text"> $<?php print number_format($producto['valor']) ?></p>
          <a href="producto.php?id=<?php print $producto['id'] ?>" class="btn btn-primary">Detalle</a>
        </div>
      </div>
    <?php } ?>
    </div>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>