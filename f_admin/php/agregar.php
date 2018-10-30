<?php
  include ('../../config/conexion.php');

  $nombre = strtoupper($_POST['nombre']);
  $stock = $_POST['stock'];
  $valor = $_POST['valor'];
  $genero = $_POST['genero'];
  $tipo = $_POST['tipo'];
  $img = $_POST['img'];

  $sql = "INSERT INTO PRODUCTO(ID, NOMBRE, STOCK, VALOR, GENERO, IMG, TIPO_PRODUCTO_ID)
          VALUE (NULL, \"$nombre\", $stock, $valor, $genero, \"$img\", $tipo)";

  $query = $con->query($sql);
  if ($query != null) {
    print '<script>alert("Producto agregado con exito.");window.location="../productos.php";</script>';
  } else {
    print '<script>alert("No se pudo agregar.");window.location="../productos.php";</script>';
  }

?>