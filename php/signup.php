<?php
  include ('../config/conexion.php');

  if (isset($_POST['nombre'])) { $nombre = strtoupper($_POST['nombre']); }
  if (isset($_POST['apellido'])) { $apellido = strtoupper($_POST['apellido']); }
  if (isset($_POST['direccion'])) { $direccion = strtoupper($_POST['direccion']); }
  if (isset($_POST['correo'])) { $correo = strtoupper($_POST['correo']); }
  $telefono = $_POST['telefono'];
  if (isset($_POST['contrasena'])) { $clave = sha1($_POST['contrasena']); }

  if (!empty($_POST)) {
    $sql = "INSERT INTO USUARIO(ID, NOMBRE, APELLIDO, DIRECCION, TELEFONO, CORREO, CLAVE, TIPO_USUARIO_ID, ESTADO)
            VALUE (NULL, \"$nombre\", \"$apellido\", \"$direccion\", \"$telefono\", \"$correo\", \"$clave\", 2, 1)";
    $query = $con->query($sql);
    if ($query!=null) {
      print '<script>alert("Registro completado con exito.");window.location="../index.php";</script>';
    } else {
      print '<script>alert("No se pudo agregar.");window.location="../index.php";</script>';
    }
  }

?>