<?php 

	require_once 'init.php';


	if($_GET["function"]) {
		$routes = new Route();
		switch ($_GET["function"]) {
			case 1:
				$routes->getPost();
				break;
			case 2: 
				$routes->getResto();
				break;
			default:
				# code...
				break;
		}
	}
	





 ?>
