<?php
	$page = $_SERVER['PHP_SELF'];
	switch ($page) {
		// case '/americanBlack/f_user/catalogo.php':
		// 	$CURRENT_PAGE = "Catalogo";
		// 	$PAGE_TITLE = "Catálogo";
    //   break;
    case '/americanBlack/f_user/cuenta.php':
			$CURRENT_PAGE = "Cuenta";
			$PAGE_TITLE = "Cuenta";
			break;
		case '/americanBlack/f_user/carrito.php':
			$CURRENT_PAGE = "Carrito";
			$PAGE_TITLE = "Carro de compras";
			break;
		default:
			$CURRENT_PAGE = "Index";
      $PAGE_TITLE = "Inicio";
	}
?>