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

  <div class="container main-container">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Subtotal</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Total</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">Buso cuadros</th>
          <td>$60.000</td>
          <td>3</td>
          <td>$180.000</td>
          <td class="btn-group">
            <a href="#" class="btn btn-outline-info">
              <i class="fas fa-boxes fa-lg fa-fw"></i>
            </a>
            <a href="#" class="btn btn-outline-danger">
              <i class="fas fa-trash-alt fa-lg fa-fw"></i>
            </a>
          </td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td>TOTAL</td>
          <td colspan="3" class="text-right">$180.000</td>
          <td></td>
        </tr>
      </tfoot>
    </table>
  </div>

  <?php
    include('../global/footer.php');
    include('../global/external-js.html');
  ?>
</body>
</html>