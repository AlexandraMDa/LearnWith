<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_get_data.php";
	$user = get_data_parinte($_SESSION['id_cont_parinte']);
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
		include_once "view/Pagini/Partiale/antet_parinte.php";
		include_once "view/Pagini/Partiale/meniu_parinte.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="index.php?pagina=view_panou_parinte">
				&#8810;
			</a>  
			Editeaza contul
		</h1>
	</div>
		<form method="POST" action="index.php?pagina=edit_cont_parinte">
			<?php
				global $error;
				if(isset($error)){
					echo "<span class='eroare_style'>".$error."</span>";
				}
			?>
			<label for="Nume"><b>Nume: </b></label>
			<input id="input_intro" type="text" name="Nume" placeholder="Scrie aici numele de familie" required value="<?=$user[0]['Nume']?>">
			<br>
			<label for="Prenume"><b>Prenume: </b></label>
			<input id="input_intro" type="text" name="Prenume" placeholder="Scrie aici prenumele tău" required value="<?=$user[0]['Prenume']?>">
			<br>
			<label for="Data_nasterii"><b>Data nasterii: </b></label>
			<input type="date" name="Data_nasterii" value="<?=$user[0]['Data_nas']?>">
			<br>
			<label for="Telefon"><b>Număr de telefon: </b></label>
			<input id="input_intro" type="tel" name="Telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required value="<?=$user[0]['Telefon']?>">
			<br>
			<label for="Mail"><b>Adresa de mail: </b></label>
			<input id="input_intro" type="email" name="Mail" pattern=".+@.+.com" required value="<?=$user[0]['Adresa_mail']?>">
			<br>
			<label for="Adresa"><b>Adresa: </b></label>
			<textarea id="input_intro" name="Adresa" placeholder="Scrie aici adresa domiciliului"><?php echo $user[0]['Adresa']; ?></textarea>
			<br>
			<label for="Nume_cont"><b>Nume cont: </b></label>
			<input id="input_intro" type="text" name="Nume_cont" placeholder="Scrie aici numele tău de cont" required value="<?=$user[0]['Nume_cont']?>">
			<br>
			<label for="Parola"><b>Parola: </b></label>
			<input id="input_intro" type="password" name="Parola" required>
			<br>
			<label for="Reconfirma_parola"><b>Reconfirma parola: </b></label>
			<input id="input_intro" type="password" name="Reconfirma_parola" required>
			<br>
			<div class="clear">
				<button type="reset" id="reset_btn"  style=" color: white;">Reset</button>
				<button type="submit" id="submit_btn"  style=" color: white;">Trimite</button>
			</div>
		</form>
</body>
</html>