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
<article>
	<div class="pannel">
		<?php
			include_once "model/functii_elev_note.php";
			$nota = media_generala($_SESSION['id_cont_elev']);
			echo "<h1 class='titlu_pannel'>".$nota."</h1>";
		?>
		<br>
		<p style="font-size: 1.3vw; margin-left: 1%;">Media ta generala</p>
		<br>
		<a href="#" style="font-size: 1.1vw; margin-bottom: 1%;">Vezi evolutia ta</a>
	</div>
	<div class="pannel">
		<?php
			include_once "model/functii_elev_note.php";
			$loc = loc_in_clasament($_SESSION['id_cont_elev']);
			echo "<h1 class='titlu_pannel'>".$loc."</h1>";
		?>
		<br>
		<p style="font-size: 1.3vw; margin-left: 1%;">Media ta generala</p>
		<br>
		<a href="#" style="font-size: 1.1vw; margin-bottom: 1%;">Vezi evolutia ta</a>
	</div>
	<div class="pannel">
		<?php
			include_once "model/functii_elev_note.php";
			$loc = loc_in_scoala($_SESSION['id_cont_elev']);
			echo "<h1 class='titlu_pannel'>".$loc."</h1>";
		?>
		<br>
		<p style="font-size: 1.3vw; margin-left: 1%;">Loc in clasamentul scolii</p>
		<br>
		<a href="#" style="font-size: 1.1vw; margin-bottom: 1%;">Vezi evolutia ta</a>
	</div>
	<div class="pannel">
		<?php
			include_once "model/functii_elev_note.php";
			$res = rezultate($_SESSION['id_cont_elev']);
			echo "<h1 class='titlu_pannel'>".$res."</h1>";
		?>
		<br>
		<p style="font-size: 1.3vw; margin-left: 1%;">Media ta generala</p>
		<br>
		<a href="#" style="font-size: 1.1vw; margin-bottom: 1%;">Vezi evolutia ta</a>
	</div>
</article>
</body>
</html>