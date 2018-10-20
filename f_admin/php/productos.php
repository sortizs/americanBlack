<?php
  include ('../config/conexion.php');

  $sql = "SELECT * FROM PRODUCTO, TIPO_PRODUCTO WHERE tipo_producto = `TIPO_PRODUCTO`.`id`";
  $result = mysqli_query($con, $sql);
?>