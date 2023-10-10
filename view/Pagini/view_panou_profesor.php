<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
					<!-- Bara de titlu -->
	<title>Platforma de invatare</title>

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
		include_once "view/Pagini/Partiale/antet_prof.php";
	?>
	<br><br>
	<section>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_discipline_general" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_profesori/discipline.jpg" alt="Gestioneaza disciplinele tale" class="img_cont">
				<div class="descriere">Gestioneaza disciplinele tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_orar_profesor" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_profesori/orar.png" alt="Vezi orarul tau" 
				class="img_cont">
				<div class="descriere">Vezi orarul tau!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_clase_general" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_profesori/clasa.png" alt="Gestioneaza clasa ta" 
				class="img_cont">
				<div class="descriere">Gestioneaza clasele tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_materiale_general" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_profesori/lectie.jpg" alt="Adauga materiale" 
				class="img_cont">
				<div class="descriere">Adauga materiale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_intro_examen" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_profesori/note.png" 
				alt="Adauga test" class="img_cont">
				<div class="descriere">Adauga un test!</div>
			</a>
		</aside>
	</section>
	<?php
		include_once "view/Pagini/Partiale/footer_prof.php";
	?>
</body>
</html>