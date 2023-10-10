<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Adauga note</title>
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/meniu_prof.php";
		include_once "view/Pagini/Partiale/antet_prof.php";
	?>
	<h1 style=" font-size: 2vw; text-align: center;">
		<a href="<?php echo BASE_URL;?>index.php/view_discipline_general">
			&#8810;
		</a>  
		Adauga nota
	</h1>
	<form method="POST" action="<?php echo BASE_URL;?>index.php/execute_adauga_nota">
		<input type="hidden" name="id_elev" value="<?php echo $_GET['id'];?>">
		<input type="hidden" name="id_disciplina" value="<?php echo $_GET['id_disciplina'];?>">
		<label for="data">Data: </label>
		<input type="date" name="data">
		<br>
		<label for="nota">Nota: </label>
		<input type="text" name="nota" id="input_intro">
		<br>
		<div class="clear">
			<button type="reset" id="reset_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw; background-color: red;">Reset</button>
			<button type="submit" id="submit_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw;">Trimite</button>
		</div>
	</form>
</body>
</html>