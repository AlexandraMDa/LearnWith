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
	<title>Adauga material</title>

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
		include_once "view/Pagini/Partiale/meniu_prof.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_materiale_general">
				&#8810;
			</a>  
			Adauga materiale
		</h1>
	</div>
	<form method="GET" action="<?php echo BSE_URL;?>index.php/execute_intro_material">
		<input type="hidden" name="disciplina" value="<?php echo $_GET['id'];?>">
		<textarea id="input_intro" style="width: 95%; margin-left: 2%;" rows="17" name="continut"></textarea>
		<br><br><br>
		<div class="clear">
			<button style="color: white;" type="reset" id="reset_btn">Reset</button>
			<button style="color: white;" type="submit" id="submit_btn">Trimite</button>
		</div>
	</form>
</body>
</html>