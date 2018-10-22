<?php
  include('config/navigation.php');
  include('php/producto.php');

  $PAGE_TITLE = ucfirst(strtolower('NOMBRE'));
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
      <?php echo ucfirst(strtolower('NOMBRE DEL PRODUCTO')) ?> <small><?php echo ucfirst(strtolower('GENERO')) ?></small>
    </h1>

    <div class="row animated fadeIn">
      <div class="col-md-4">
        <img src="" alt="<?php echo 'NOMBRE' ?>" class="img-fluid">
        <br><br>
        <a href="" class="btn btn-outline-info">Regresar</a>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col">
            <h3><?php echo ucfirst(strtolower('TIPO')) ?></h3>
          </div>
          <div class="col text-right">
            <h3><?php echo "$".number_format(60000) ?></h3>
          </div>
        </div>
        <p>
          <?php echo ucfirst(strtolower('DESCRIPCION')) ?>
        </p>
        <a href="#" class="btn btn-primary">
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