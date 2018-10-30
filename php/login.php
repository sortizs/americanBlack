<?php
  include ('../config/conexion.php');

  if (isset($_POST['correo'])) { $correo = strtoupper($_POST['correo']); }
  if (isset($_POST['contrasena'])) { $clave = sha1($_POST['contrasena']); }

  if (!empty($_POST)) {
    $sql = "SELECT * FROM USUARIO WHERE CORREO = '$correo'";
    $query = $con->query($sql);
    $usuario = mysqli_fetch_array($query);

    if ($usuario['clave'] == $clave) {
      
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['id'] = $usuario['id'];

      if ($usuario['tipo_usuario'] == 1){
        print "<script>window.location=\"../f_admin/productos.php\";</script>";
      } else {
        print "<script>window.location=\"../f_user/catalogo.php\";</script>";
      }
    } else {
      print "<script>window.location=\"../index.php\";</script>";
    }

  }
?>