<?php
  include('../config/conexion.php');
  // include('../../config/conexion.php');

  $sql = "SELECT pr.id, pr.nombre, pr.stock, pr.valor, pr.img, tp.descripcion AS tipo, gn.descripcion AS genero FROM producto AS pr, tipo_producto AS tp, genero AS gn WHERE pr.genero = gn.id AND pr.tipo_producto_id = tp.id";

  $result = mysqli_query($con, $sql);

  while ($producto = mysqli_fetch_array($result)){
    foreach($producto as $cname => $cvalue){
      print "$cname: $cvalue\t";
    }
    print "\r\n";
  }

?>