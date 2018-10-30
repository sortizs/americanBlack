<?php
  include ('../../config/conexion.php');

  session_start();

  $producto = $_GET['id'];
  $usuario = $_SESSION['id'];

  $sql = "INSERT INTO CARRITO(ID, CANTIDAD, PRODUCTO, USUARIO) VALUE (NULL, 1, $producto, $usuario)";

  $query = $con->query($sql);
  if ($query != null) {
    print '<script>alert("Agregado 1 producto al carrito.");window.location="../carrito.php";</script>';
  } else {
    print '<script>alert("No se pudo agregar.");window.location="../carrito.php";</script>';
  }

?>