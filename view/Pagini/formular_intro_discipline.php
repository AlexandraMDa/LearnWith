<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
			<!-- BARA DE TITLU-->
	<title>Introdu disciplina noua</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_discipline_general">
				&#8810;
			</a>  
			Adauga o disciplina noua!
		</h1>
	</div>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
	?>
	<br><br><br>
	<form action="<?php echo BASE_URL;?>index.php/introdu_disciplinadb" method="POST">
		<label for="nume_disciplina" class="eticheta_formular">Numele disciplinei:</label>
		<input type="text" name="nume_disciplina" id="input_intro" placeholder="Adauga aici numele disciplinei noi..." required>
		<br><br>
		<label for="clase" class="eticheta_formular">Clasele la care predai:</label>
		<?php
			include_once "model/functii_select.php";
			$result = select_clase();
			foreach($result as $row){
				echo "<input type='checkbox' name='clase[]' value='".$row['ID_Clasa']."'>
				<span class='eticheta_formular eticheta_clase'>".$row['Nume_clasa']."</span>";
			}
		?>
		<br>
		<div class="clear">
			<button type="reset" id="reset_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw; background-color: red;">Reset</button>
			<button type="submit" id="submit_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3vw;">Trimite</button>
		</div>
	</form>
</body>
</html>