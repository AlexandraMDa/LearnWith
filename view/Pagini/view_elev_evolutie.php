<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
			<!-- BARA DE TITLU-->
	<title>Vizualizare evolutie</title>

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
	<?php
		include_once "view/Pagini/Partiale/antet_elev.php";
		include_once "view/Pagini/Partiale/meniu_elev.php";
	?>
<div style= "text-align:center;">
	<h1 style=" font-size: 2vw;">
		<a href="<?php echo BASE_URL;?>index.php/view_panou_elev">
			&#8810;
		</a>  
		Vizualizare evolutie
	</h1>
</div>
<div style="width:75%;">
	<canvas id="canvas"></canvas>
</div>
	<section>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_elev_evolutie_note" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/note.jpg" alt="Vezi notele tale" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi evolutia pentru notele tale!
					</div>
				</div>
				<div class="descriere">Vezi evolutia pentru notele tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_elev_evolutie_absente" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/evolutie.png" alt="Vezi evolutia ta" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi evolutia ta pentru absente aici!
					</div>
				</div>
				<div class="descriere_panou_elev">Vezi evolutia ta pentru absente!</div>
			</a>
		</aside>
	</section>
</html>