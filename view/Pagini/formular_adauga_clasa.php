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
	<title>Adauga o clasa noua</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_clase_general">
			&#8810;
			</a>  
			Adauga o clasa noua!
		</h1>
	</div>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
	?>
	<br><br><br>
	<form action="index.php?pagina=introdu_clasadb" method="POST">
		<label for="nume_clasa" class="eticheta_formular">Numele clasei:</label>
			<select name="nume_clasa">
				<?php
					include_once "model/functii_select.php";
					$clase = select_clase();
					if(count($clase) > 0){
						foreach($clase as $row ){
							echo  
							"<option value='".$row['ID_Clasa']."'>".$row['Nume_clasa']." - ".$row['Profil']." - ".$row['Specializare'].
							"</option>";
						}
					}
				?>
			</select>
		<br><br>
		<label for="discipline" class="eticheta_formular">Discipline predate:</label>
		<?php
			include_once "model/functii_select.php";
			$result = list_discipline($_SESSION['id_cont_prof']);
			foreach($result as $row){
				echo "<input type='checkbox' name='discipline' value='".$row['Nume_disciplina']."'>
				<span class='eticheta_formular eticheta_clase'>".$row['Nume_disciplina']."</span>";
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