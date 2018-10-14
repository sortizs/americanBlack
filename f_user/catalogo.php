<?php include('config/navigation.php') ?>
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
    <?php
      include ('../config/conexion.php');

      $sql = "SELECT * FROM PRODUCTO";
      $query = $con->query($sql);
      
      while ($producto = mysqli_fetch_array($query)){
    ?>

    <div class="card" style="width: 18rem;">
      <!-- <img class="card-img-top" src=".../100px180/" alt="Card image cap"> -->
      <div class="card-body">
        <h5 class="card-title"><?php print $producto['nombre'] ?></h5>
        <p class="card-text"> $<?php print number_format($producto['valor']) ?> </p>
        <a href="#" class="btn btn-primary">Detalle</a>
      </div>
    </div>

    <?php
      }
    ?>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>