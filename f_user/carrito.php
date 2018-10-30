<?php
  include('config/navigation.php');
  include('../config/validation.php');
  include('php/cart.php');
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
        <h1>Carro de compras</h1>
      </div>
      <div class="col-md-6" style="text-align: right; vertical-align: supper">
        <a href="php/comprar.php" class="btn btn-primary">Comprar</a>
      </div>
    </div>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nombre</th>
          <th scope="col">Costo</th>
          <th scope="col">Cantidad</th>
          <th scope="col">Subtotal</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
          $total = 0;
          while($carrito = mysqli_fetch_array($result)){

            $sql_cantidad = "SELECT COUNT(carrito.producto) FROM carrito WHERE carrito.producto = {$carrito['id']};";

            $result_cantidad = mysqli_fetch_array(mysqli_query($con, $sql_cantidad))[0];

            print '<tr>';
            print "<td>{$carrito['producto']}</td>";
            print "<td>$". number_format($carrito['valor']) ."</td>";
            print "<td>{$result_cantidad}</td>";
            $subtotal = $carrito['valor'] * $result_cantidad;
            print "<td>$". number_format($subtotal) ."</td>";
            $total += $subtotal;
            print "<td class=\"btn-group\">";
            print "\t<a href=\"producto.php?id={$carrito['id']}\" class=\"btn btn-outline-info\">";
            print "\t\t<i class=\"fas fa-boxes fa-lg fa-fw\"></i></a>";
            print "\t<a href=\"php/eliminar.php?id={$carrito['id']}\" class=\"btn btn-outline-danger\">";
            print "\t\t<i class=\"fas fa-trash-alt fa-lg fa-fw\"></i></a></td>";
            print '</tr>';
          }
        ?>
      </tbody>
      <tfoot>
        <tr>
          <td>TOTAL</td>
          <td colspan="3" class="text-right">$<?php print number_format($total); $_SESSION['total'] = $total; ?></td>
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