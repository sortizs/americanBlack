<?php
	$page = $_SERVER['PHP_SELF'];
	switch ($page) {
		case '/americanBlack/f_admin/usuarios.php':
			$CURRENT_PAGE = "Usuarios";
			$PAGE_TITLE = "Usuarios";
      break;
    case '/americanBlack/f_admin/productos.php':
			$CURRENT_PAGE = "Productos";
			$PAGE_TITLE = "Productos";
      break;
    case '/americanBlack/f_admin/ventas.php':
			$CURRENT_PAGE = "Ventas";
			$PAGE_TITLE = "Ventas";
			break;
		case '/americanBlack/f_admin/nuevo.php':
			$PAGE_TITLE = "Agregar producto";
      break;
		default:
			$CURRENT_PAGE = "Index";
      $PAGE_TITLE = "Inicio";
	}
?>