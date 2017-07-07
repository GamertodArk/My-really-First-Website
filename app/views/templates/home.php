<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Inicio del head -->
	<?php include('app/html/public/head.php'); ?>
	<link rel="stylesheet" href="app/views/files/home/home_styles.css">
	<meta name="description"  content="Elvis Garcia, a web developer freelancer who can make the best webpage
	for your business or your company">
	<title>Elvis Garcia - Freelancer</title>
	<!-- fin del head -->
</head>
<body>
	<!-- Inicio del header -->
	<?php include( HTML_PUBLIC .'header.php'); ?>
	<!-- fin del header -->
	<main>
		<!-- inicio del modal -->
		<?php include(HTML_PUBLIC .'modal.php') ?>
		<!-- fin del modal -->
		<div class="firstPicture">
			<h2>Elvis Garcia web developer</h2>
			<p>A web developer</p>
		</div>
		<div class="ofrecimientos">
			<h2>What do i offer?</h2>
			<div class="logos">
				<div class="inf responsive">
					<span><i class="fa fa-mobile" aria-hidden="true"></i></span>
					<p>Your web page will be responsive for any device, it will be able to be seen in computers,
					phones and tablets</p>
				</div>
				<div class="inf custom">
					<span><i class="fa fa-cog" aria-hidden="true"></i></span>
					<p>
						You can tell me what you want for your web page and you can customize it.
					</p>
				</div>
				<div class="inf contact">
					<span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
					<p>You can contact me at any time, i will be available for you for telling you how is your website going</p>
				</div>
			</div>
		</div>
	</main>
	<!-- inicio del footer -->
	<?php include(HTML_PUBLIC .'footer.php'); ?>
	<!-- fin del footer -->
</body>
</html>