<?php
  include('../config/validation.php');
  include('config/navigation.php');
  include('../config/conexion.php');

  $id = $_GET['id'];

  $sql = "SELECT pr.nombre, pr.stock, pr.valor, pr.img, tp.descripcion AS tipo, gn.descripcion AS genero FROM producto AS pr, tipo_producto AS tp, genero AS gn WHERE pr.genero = gn.id AND pr.tipo_producto_id = tp.id AND pr.id = $id";

  $result = mysqli_query($con, $sql);
  $producto = mysqli_fetch_array($result);

  $PAGE_TITLE = ucfirst(strtolower($producto['nombre']));
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
    <h1>
      <?php print ucfirst(strtolower($producto['nombre'])) ?>
      <small><?php print ucfirst(strtolower($producto['genero'])) ?></small>
    </h1>

    <div class="row animated fadeIn">
      <div class="col-md-4">
        <img src="../images/<?php print $producto['img'] ?>" alt="<?php print $producto['nombre'] ?>" class="img-fluid">
        <br><br>
        <a href="catalogo.php" class="btn btn-outline-info">Regresar</a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col">
            <h3><?php print ucwords(strtolower($producto['tipo'])) ?></h3>
          </div>
          <div class="col text-right">
            <h3><?php print "$".number_format($producto['valor']) ?></h3>
          </div>
        </div>
        <p>
          <?php print ucfirst(strtolower($producto['stock'])) ?>
        </p>
        <a href="php/addcart.php?id=<?php print $_GET['id'] ?>" class="btn btn-primary">
          <i class="fas fa-cart-plus fa-2x fa-fw"></i>
        </a>
      </div>
    </div>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>

<?php ?>