<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit nota</title>
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
			Editeaza absenta
		</h1>
	</div>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
		include_once "model/functii_select.php";
		$result = data_absenta($_GET['id']);
	?>
	<form method="POST" action="<?php echo BASE_URL;?>index.php/edit_absentadb">
		<input type="hidden" name="id_absenta" value="<?php echo $result[0]['ID_Absenta'];?>">
		<label for="data">Data: </label>
		<input type="date" name="data" value="<?php echo $result[0]['Data'];?>">
		<br>
		<label for="motivat" requested>Motivat: </label>
		<select name="motivat" requested>
			<option value="DA">DA</option>
			<option value="NU">NU</option>
		</select>
		<br>
		<div class="clear">
			<button type="reset" id="reset_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw; background-color: red;">Reset</button>
			<button type="submit" id="submit_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw;">Trimite</button>
		</div>
	</form>
</body>
</html>