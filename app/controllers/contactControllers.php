<?php

	if (isset($_POST['hidden'])) {
		if (
			isset($_POST['name']) && !empty($_POST['name'])      &&
			isset($_POST['lastName']) && !empty($_POST['name'])  &&
			isset($_POST['email']) && !empty($_POST['email'])	 &&
			isset($_POST['subject']) && !empty($_POST['subject'])&&
			isset($_POST['messageForm']) && !empty($_POST['messageForm'])
			) {
			mail('cavesagarcia@hotmail.com', $_POST['subject'] , 'Elvis, la persona ' . $_POST['name'] . ' ' . $_POST['lastName'] . ' quiere comunicarse contigo, su correo electronico es ' . $_POST['email'] . ' y su mensaje es el siguiente ' . $_POST['messageForm']);
		echo 1;
		} else {
			echo 2;
		}

		
	} else {
	include('app/views/templates/contact.php');
	}

?>