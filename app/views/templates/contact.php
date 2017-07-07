<!DOCTYPE html>
<html lang="en">
<head>
	<!-- inicio del head -->
	<?php include('app/html/public/head.php') ?>
	<link rel="stylesheet" href="app/views/files/contact/contact_style.css">
	<meta name="description" content="Contact Elvis Garcia, a web developer and web designer freelancer 
	who can design de best wab page for you or your business">
	<title>Contact Elvis Garcia - Freelancer</title>
	<!-- fin del head -->
</head>
<body>
	<!-- inicio del header -->
	<?php include( HTML_PUBLIC . 'header.php') ?>
	<!-- fin de header -->
	<main>
		<!-- inicio de modal -->
		<?php include(HTML_PUBLIC .'modal.php') ?>
		<!-- fin del modal -->
		<section class="formulario">
			<h2>Contact form</h2>
			<div class="message " id="message">
			
			</div>
			<form action="app/controllers/contactControllers.php" method="Post" id="pForm">
				<div class="names">
					<input type="text" name="name" id="name" placeholder="Name">
					<input type="text" name="lastName" id="lastName" placeholder="Last Name">
				</div>
				<div class="information">
					<input type="text" name="email" id="email" placeholder="Email">
					<input type="text" name="subject" id="subject"  placeholder="Subject">
					<input type="hidden" name="hidden" value="1" id="hidden">
				</div>
				<textarea name="messageForm" id="messageForm" cols="30" rows="10" placeholder="Message..." form="pForm"></textarea>
				<input type="button" value="Send" onclick="send_form()">
			</form>
		</section>
	</main>
	<!-- inicio de footer -->
	<?php include(HTML_PUBLIC . 'footer.php') ?>
	<script src="app/views/files/contact/send_form.js"></script>
	<!-- fin de footer -->
</body>
</html>