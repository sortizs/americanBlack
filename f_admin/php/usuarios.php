<?php
  include ('../config/conexion.php');

  $sql = "SELECT * FROM USUARIO, TIPO_USUARIO WHERE TIPO_USUARIO_id = `TIPO_USUARIO`.`id`";
  $result = mysqli_query($con, $sql);
?>