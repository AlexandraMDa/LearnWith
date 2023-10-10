<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
					<!-- Bara de titlu -->
	<title>Panou parinte</title>

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
		include_once "view/Pagini/Partiale/alerte.php";
		include_once "view/Pagini/Partiale/antet_parinte.php";
	?>
	<a href="<?php echo BASE_URL;?>index.php/view_calendar_parinte" target="_top" style="color: black;">
		<span style="padding-left: 50%;">
			<img src="<?php echo BASE_URL;?>/view/Surse_imag/Icons/calendar.png" id="icon_imag">
			<h2 style="display: inline;">Calendar</h2>
		</span>
	</a>
	<br><br>
	<section>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_select_copil" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_parinte/select.png" alt="Selecteaza copilul tau" 
				class="img_cont">
				<div class="descriere">Selecteaza copilul tau!</div>
			</a>
		</aside>
		<aside class="galerie_opt_elev">
			<a href="<?php echo BASE_URL;?>index.php/view_copii_general" target="_top">
				<img src="<?php echo BASE_URL;?>/view/Surse_imag/Optiuni_cont/Optiuni_cont_parinte/note.png" alt="Vezi nosituatiilete copiilor tai" 
				class="img_cont">
				<div class="descriere">Vezi situatiile copiilor tai!</div>
			</a>
		</aside>
	</section>
	<!--
	<section>
		<div style="position: absolute; right: 4%; bottom: 2%;" class="general_options">
			<span style="padding-left: 1px;">
				<a href="<?php echo BASE_URL;?>index.php/delog">Delog</a>
			</span>
		</div>
	</section>
	-->
    <?php
    	include "view/Pagini/Partiale/footer_parinte.php";
    ?>
</body>
</html>