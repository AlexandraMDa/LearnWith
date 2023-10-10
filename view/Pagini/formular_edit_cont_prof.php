<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_get_data.php";
	$user = get_data_prof($_SESSION['id_cont_prof']);
	if($user == FALSE){
		redirect('error');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
			<!-- BARA DE TITLU-->
	<title>Editeaza-ti contul</title>

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
			<a href="index.php?pagina=view_panou_prof">
				&#8810;
			</a>  
			Editeaza contul
		</h1>
	</div>
		<form method="POST" action="index.php?pagina=edit_cont_prof">
			<?php
				global $error;
				if(isset($error)){
					echo "<span class='eroare_style'>".$error."</span>";
				}
			?>
			<label for="Nume"><b>Nume: </b></label>
			<input id="input_intro" type="text" name="Nume" placeholder="Scrie aici numele de familie" required value="<?=$user[0]['Nume'];?>">
			<br><br>
			<label for="Prenume"><b>Prenume: </b></label>
			<input id="input_intro" type="text" name="Prenume" placeholder="Scrie aici prenumele tău" required value="<?=$user[0]['Prenume']?>">
			<br><br>
			<label for="Grad"><b>Grad: </b></label>
				<input type="radio" name="Grad" value="3" style="text-align: left;">Definitivat    
				<input type="radio" name="Grad" value="2" style="text-align: center;">2       
				<input type="radio" name="Grad" value="1" style="text-align: right;">1  
			<br><br>
			<label for="Nume_cont"><b>Nume cont: </b></label>
			<input id="input_intro" type="text" name="Nume_cont" placeholder="Scrie aici numele tău de cont" required value="<?=$user[0]['Nume_cont']?>">
			<br><br>
			<label for="Parola"><b>Parola: </b></label>
			<input id="input_intro" type="password" name="Parola" required>
			<br><br>
			<label for="Reconfirma_parola"><b>Reconfirma parola: </b></label>
			<input id="input_intro" type="password" name="Reconfirma_parola" required>
			<br><br>
			<div class="clear">
				<button type="reset" id="reset_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3; background-color: red;">Reset</button>
				<button type="submit" id="submit_btn" style="width: 40%; margin: 2%; color: white; font-size: 1.3">Trimite</button>
			</div>
		</form>
</body>
</html>