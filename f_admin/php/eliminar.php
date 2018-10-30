<?php
  include('../../config/conexion.php');
  // $_GET['id']

  $sql = "DELETE FROM producto WHERE producto.id = {$_GET['id']}";

  $result = mysqli_query($con, $sql);

  if($result != null) {
    print '<script>alert("Producto eliminado con éxito.");window.location="../productos.php"</script>';
  } else {
    print '<script>alert("No se pudo eliminar, intente de nuevo más tarde.");window.location="../poductos.php"</script>';
  }

?>