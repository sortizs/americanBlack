<?php
  include ('../config/conexion.php');

  if (isset($_POST['correo'])) { $correo = strtoupper($_POST['correo']); }
  if (isset($_POST['contrasena'])) { $clave = sha1($_POST['contrasena']); }

  if (!empty($_POST)) {
    $sql = "SELECT * FROM USUARIO WHERE CORREO = '$correo'";
    $query = $con->query($sql);
    $usuario = mysqli_fetch_array($query);

    if ($usuario['clave'] == $clave) {
      if ($usuario['TIPO_USUARIO_id'] == 1){
        print "<script>window.location=\"../f_admin/index.php\";</script>";
      } else {
        print "<script>window.location=\"../f_user/index.php\";</script>";
      }
    }

  }
?>