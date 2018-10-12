<?php
  include ('../config/conexion.php');

  if (isset($_POST[nombre])) { $nombre = strtoupper($_POST[nombre]); }
  if (isset($_POST[apellido])) { $apellido = strtoupper($_POST[apellido]); }
  if (isset($_POST[direccion])) { $direccion = strtoupper($_POST[direccion]); }
  if (isset($_POST[correo])) { $correo = strtoupper($_POST[correo]); }
  if (isset($_POST[clave])) { $clave = sha1($_POST[clave]); }

  if (!empty($_POST)) {
    $sql = "INSERT INTO USUARIO(ID, NOMBRE, APELLIDO, DIRECCION, TELEFONO, CORREO, CLAVE, TIPO_USUARIO_ID, ESTADO)
            VALUE (NULL, \"${$nombre}\", \"${$apellido}\", \"${$direccion}\", \"${$telefono}\", \"${$correo}\", \"${$clave}\", 2, 1)";
    $query = $con->query($sql);
    if ($query!=null) {
      print '<script>alert("Registro completado con exito.");</script>';
    } else {
      print '<script>alert("No se pudo agregar.");</script>';
    }
  }

?>