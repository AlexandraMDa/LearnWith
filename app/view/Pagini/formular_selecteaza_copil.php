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
	<title>Formular selecteaza copil</title>
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/antet_parinte.php";
		include_once "view/Pagini/Partiale/meniu_parinte.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_parinte">
				&#8810;
			</a>  
			Selecteaza copil
		</h1>
	</div>
	<form method="POST" action="<?php echo BASE_URL;?>index.php/select_elev">
		<label for="cod"><b>Introdu codul unic: </b></label>
		<input type="text" id="input_intro" name="cod" required placeholder="Scrie aici codul unic al copilului tau...">
		<br><br>
		<br><br>
		<button type="submit" name="Trimite" class="submit_btn" style="color: white;">Trimite</button>
	</form>
</body>
</html>