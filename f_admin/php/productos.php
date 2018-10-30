<?php
  include ('../config/conexion.php');

  $sql_tipo = "SELECT * FROM TIPO_PRODUCTO";

  $result_tipo = mysqli_query($con, $sql_tipo);

?>