<?php
	$page = $_SERVER['PHP_SELF'];
	switch ($page) {
		case '/americanBlack/about.php':
			$CURRENT_PAGE = "About";
			$PAGE_TITLE = "Quiénes somos";
			break;
		case '/americanBlack/members.php':
			$CURRENT_PAGE = "Members";
			$PAGE_TITLE = "Integrantes";
			break;
		case '/americanBlack/signup.php':
			$CURRENT_PAGE = "Signup";
			$PAGE_TITLE = "Regístrate";
			break;
		default:
			$CURRENT_PAGE = "Index";
      $PAGE_TITLE = "Inicio";
	}
?>