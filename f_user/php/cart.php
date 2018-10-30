<?php
  include ('../config/conexion.php');

  $id = $_SESSION['id'];

  $sql = "SELECT DISTINCT pr.id as id, pr.nombre as producto, pr.valor as valor, cr.cantidad as cantidad FROM carrito as cr, producto as pr, usuario as us WHERE pr.id = cr.producto AND us.id = $id";

  $result = mysqli_query($con, $sql);

  $sql_total = "SELECT COUNT(carrito.producto) FROM carrito WHERE carrito.usuario = $id";

  $result_total = mysqli_query($con, $sql_total);

  $cart = mysqli_fetch_array($result_total)[0];

?>