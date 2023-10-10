<!DOCTYPE html>
<html>
<head>
					<!-- Bara de titlu -->
	<title>Sign up</title>

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
	<header>
		<a href="<?php echo BASE_URL;?>index.php/index" id="head">LearnWith</a>
	</header>

	<!-- Imaginile de logare in cont -->

	<section>
		<aside class="galerie">
			<a href="<?php echo BASE_URL;?>index.php/view_sign_elev" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Conturi/cont.png" alt="Înscrie-te ca elev" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Înscrie-te!
					</div>
				</div>
				<div class="descriere">Înscrie-te ca elev</div>
			</a>
		</aside>
		<aside class="galerie">
			<a href="<?php echo BASE_URL;?>index.php/view_sign_prof" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Conturi/cont1.png" alt="Înscrie-te ca profesor" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Înscrie-te!
					</div>
				</div>
				<div class="descriere">Înscrie-te ca profesor</div>
			</a>
		</aside>
		<aside class="galerie">
			<a href="<?php echo BASE_URL;?>index.php/view_sign_parinte" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Conturi/cont2.png" alt="Înscrie-te ca părinte" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Înscrie-te!
					</div>
				</div>
				<div class="descriere">Înscrie-te ca părinte</div>
			</a>
		</aside>
	</section>
</body>
</html>