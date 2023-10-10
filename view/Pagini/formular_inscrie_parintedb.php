<!DOCTYPE html>
<html>
<head>

				<!-- BARA DE TITLU -->

	<title>Înscriere cont părinte</title>
	<link rel="icon" type="icon/x-image" href="<?php echo BASE_URL;?>view/Surse_imag/sigla.png">

				<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Înscrie-te pe platformă pentru a avea acces la notele copilului, progres şcolar şcolar,etc.">
	<meta name="keywords" content="inscrie,cont,părinte">
	<meta name="viewport" content="width=device-width,initial-scale=1">

				<!-- Linkurile pentru bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_formulare_de_intrare.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_butoane.css">

</head>
<body class="body_form">
	<article class="modal">
		<a href="<?php echo BASE_URL;?>index.php/view_sign_up_general"><span class="close" title="Ieşi">&times;</span></a>
		<form method="POST" action="<?php echo BASE_URL;?>index.php/introdu_parintedb" class="content">
			<h1 style="margin: 1%; font-size: 2vw">Creează cont</h1>
			<?php
				global $error;
				if(isset($error)){
					echo "<span class='eroare_style'>".$error."</span>";
				}
			?>
			<p>Pentru a-ţi crea propriul cont, completează câmpurile de mai jos</p>
			<hr>
			<label for="Nume"><b>Nume: </b></label><br>
			<input type="text" name="Nume" placeholder="Scrie aici numele de familie" required>
			<br>
			<label for="Prenume"><b>Prenume: </b></label><br>
			<input type="text" name="Prenume" placeholder="Scrie aici prenumele tău" required>
			<br>
			<label for="Data_nasterii"><b>Data nasterii: </b></label>
			<input type="date" name="Data_nasterii">
			<br>
			<label for="Telefon"><b>Număr de telefon: </b></label><br>
			<input type="tel" name="Telefon" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
			<br>
			<label for="Mail"><b>Adresa de mail: </b></label><br>
			<input type="email" name="Mail" pattern=".+@.+.com" required>
			<br>
			<label for="Adresa"><b>Adresa: </b></label><br>
			<textarea name="Adresa" placeholder="Scrie aici adresa domiciliului" ></textarea>
			<br>
			<label for="Nume_cont"><b>Nume cont: </b></label><br>
			<input type="text" name="Nume_cont" placeholder="Scrie aici numele tău de cont" required>
			<br>
			<label for="Parola"><b>Parola: </b></label><br>
			<input type="password" name="Parola" required>
			<br>
			<label for="Reconfirma_parola"><b>Reconfirma parola: </b></label><br>
			<input type="password" name="Reconfirma_parola" required>
			<br>
			<div class="clear">
				<button type="reset" id="reset_btn">Reset</button>
				<button type="submit" id="submit_btn">Trimite</button>
			</div>
		</form>
	</article>
</body>
</html>