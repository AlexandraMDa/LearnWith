<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<?php 
		include_once "view/Pagini/Partiale/header.php";
	?>
					<!-- Bara de titlu -->
	<title>Platforma de invatare</title>

					<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Platforma de invatare a scolii tale, cu note, absente, statistici, lectii, programarea testelor si multe alte facilitati">
	<meta name="keywords" content="platforma,invatare,liceu,scoala">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/alerte.php";
		include_once "view/Pagini/Partiale/antet_elev.php";
	?>
	<a href="<?php echo BASE_URL;?>index.php/view_orar_elev" target="_top" style="color: black;">
		<span style="padding-left: 1%;">
			<span style="font-size: 2vw;">&#128343;</span>
			<h2 style="display: inline;">Orar</h2>
		</span>
	</a>
	<a href="<?php echo BASE_URL;?>index.php/view_calendar_elev" target="_top" style="color: black;">
		<span style="padding-left: 50%;">
			<span style="font-size: 2vw;">&#128198;</span>
			<h2 style="display: inline;">Calendar</h2>
		</span>
	</a>
	<br><br>
	<section>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_note_elev" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/note.jpg" alt="Vezi notele tale" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi notele tale!
					</div>
				</div>
				<div class="descriere">Vezi notele tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_evolutie_elev" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/evolutie.png" alt="Vezi evolutia ta" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi evolutia ta aici!
					</div>
				</div>
				<div class="descriere_panou_elev">Vezi evolutia ta!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_absente_elev" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/absente.png" alt="Vezi abseltele tale" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi absentele tale aici!
					</div>
				</div>
				<div class="descriere">Vezi absentele tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_materiale" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/clasa.png" alt="Vezi clasa ta" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi lectiile tale aici!
					</div>
				</div>
				<div class="descriere">Vezi lectiile tale!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="index.php/view_cod_elev" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/code.png" alt="Vezi codul tau" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Vezi codul tau aici!
					</div>
				</div>
				<div class="descriere">Vezi codul tau!</div>
			</a>
		</aside>
		<!--
		<aside class="galerie_opt_elev">
			<a href="#" target="_top">
				<img src="<?php echo BASE_URL;?>view/Surse_imag/Optiuni_cont/Optiuni_cont_elev/chat.jpg" alt="Intra in chat" class="img_cont">
				<div class="mijloc">
					<div class="text">
						Intra in chat aici!
					</div>
				</div>
				<div class="descriere">Intra in chat!</div>
			</a>
		</aside>
	-->
	</section>
	<?php
		include_once "view/Pagini/Partiale/footer.php";
	?>
</body>
</html>