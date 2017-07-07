<?php

	if ($_POST) {
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			mail('cavesaagrcia@htomail.com','alguien te envio su correo electronico', 'elvis, la persona de correo electronico ' . $_POST['email'] . ' quieres contactarse contigo');
			echo 1;
		} else {
			echo 2; 
		}
	} else {
		echo'no esta definida';
	}

?>