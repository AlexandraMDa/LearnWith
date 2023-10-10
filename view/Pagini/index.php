<!DOCTYPE html>
<html>
<head>
					<!-- Bara de titlu -->
	<title>Platforma de invatare</title>
	<link rel="icon" type="icon/x-image" href="<?php echo BASE_URL;?>view/Surse_imag/sigla.png">

					<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Platforma de invatare a scolii tale">
	<meta name="keywords" content="platforma,invatare,liceu,scoala">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
</head>
<body>
	<header id="head">
		LearnWith
	</header>

			<!-- CARUSELUL DE IMAGINI -->

	<section class="container">
		<div id="myCarusel" class="carousel slide" data-ride="carousel">
			<!--Indicatori -->
			<ol class="carousel-indicators">
				<li data-target="#myCarusel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarusel" data-slide-to="1"></li>
				<li data-target="#myCarusel" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="<?php echo BASE_URL;?>/view/Surse_imag/Carusel/learn1.5.jpg" alt="Learning_platform" class="img_carusel">
					<div class="carousel-caption">
						<h3>Platforma de învățare</h3>
						<p>Autentifică-te și înscrie-te într-o clasă!</p>	
					</div>
				</div>
				<div class="item">
					<img src="<?php echo BASE_URL;?>/view/Surse_imag/Carusel/learn1.jpg" alt="Learning_platform" class="img_carusel">
					<div class="carousel-caption">
						<h3>Platforma de învățare</h3>
						<p>Lecții și teste</p>	
					</div>
				</div>
				<div class="item">
					<img src="<?php echo BASE_URL;?>/view/Surse_imag/Carusel/learn2.jpg" alt="Learning_platform" class="img_carusel">
					<div class="carousel-caption">
						<h3>Platforma de învățare</h3>
						<p>Toate informațiile din școala ta de care ai nevoie într-un singur loc</p>	
					</div>
				</div>
			</div>
			<!-- Controlerele caruselului -->
			<a class="left carousel-control" href="#myCarusel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" style="overflow: hidden;"></span>
				<span class="sr-only">Înainte</span>
			</a>
			<a class="right carousel-control" href="#myCarusel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" style="overflow: hidden;"></span>
				<span class="sr-only">Următorul</span>
			</a>
		</div>
	</section>

	<footer>
		<a href="<?php echo BASE_URL;?>index.php/view_log_in_general"><button id="log">Log in!</button></a>
		<a href="<?php echo BASE_URL;?>index.php/view_sign_up_general"><button id="sign">Nu ai cont? Fa unul aici!</button></a>
	</footer>
</body>
</html>