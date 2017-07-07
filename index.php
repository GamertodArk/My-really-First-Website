<?php

	require('core/core.php');

	if (isset($_GET['view'])) {
			if (file_exists('app/controllers/' . $_GET['view'] .'Controllers.php')) {
				include('app/controllers/' . $_GET['view'] . 'Controllers.php');
			} else {
				include('app/controllers/notfoundControllers.php');
			}
	} else {
		include('app/controllers/homeControllers.php');
	}

?>