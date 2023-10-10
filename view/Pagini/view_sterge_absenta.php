<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sterge nota</title>
					<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Platforma de invatare a scolii tale">
	<meta name="keywords" content="platforma,invatare,liceu,scoala">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
	<script src="<?php echo BASE_URL;?>libraries/angular/angular.min.js"></script>
	<script src="<?php echo BASE_URL;?>view/surse_js/gestionare.js"></script>
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/antet_prof.php";
		include_once "view/Pagini/Partiale/meniu_prof.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_discipline_general">
				&#8810;
			</a>  
			Sterge absenta
		</h1>
	</div>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
	?>
	<h1>Sigur doresti sa stergi aceasta absenta?</h1>
	<section>
		<a href="<?php echo BASE_URL;?>index.php/view_clase_general">
			<button id="reset_btn" style="width: 40%;">Nu, inapoi la pagina principala</button>
		</a>
		<?php
			echo "
			<a href='".BASE_URL."index.php/execute_sterge_absenta?id=".$_GET['id']."'>
				<button id='reset_btn' style='width: 40%; background-color: red; float: right;'>Da, sterge absenta</button>
			</a>
			";
		?>
	</section>
</body>
</html>