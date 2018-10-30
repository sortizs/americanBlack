<?php
  include('../../config/conexion.php');

  session_start();

  $fecha = date("Y-m-d H:i:s");
  $total = $_SESSION['total'];
  $usuario = $_SESSION['id'];

  $sql_factura = "INSERT INTO FACTURA(ID, FECHA, TOTAL, USUARIO) VALUES (NULL, \"$fecha\", $total, $usuario)";

  $result_factura = mysqli_query($con, $sql_factura);

  if ($result_factura != null) {
    $sql_carrito = "DELETE FROM CARRITO WHERE USUARIO=$usuario";

    $result_carrito = mysqli_query($con, $sql_carrito);

    if ($result_carrito != null) {
      print '<script>alert("Compra realizada, el producto llegará la dirección registrada.");window.location="../catalogo.php";</script>';
    } else {
      print '<script>alert("No se pudo completar la compra.");window.location="../carrito.php";</script>';
    }
  } else {
    print '<script>alert("No se pudo completar la solicitud.");</script>';
  }
?>