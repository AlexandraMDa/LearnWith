<!DOCTYPE html>
<html>
<head>

				<!-- BARA DE TITLU -->

	<title>Autentificare</title>
	<link rel="icon" type="icon/x-image" href="<?php echo BASE_URL;?>view/Surse_imag/sigla.png">

				<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Autentifică-te pe platformă pentru a avea acces la lecții, teste, exerciții și a interacționa cu colegii și profesorii">
	<meta name="keywords" content="autentificare,cont,elev">
	<meta name="viewport" content="width=device-width,initial-scale=1">

				<!-- Linkurile pentru bootstrap -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_general.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_formulare_de_intrare.css">
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>/view/Surse_css/stil_butoane.css">
</head>

<body class="body_form">
	<article class="log_in_modal">
		<a href="<?php echo BASE_URL;?>index.php/index"><span class="close" title="Ieşi">&times;</span></a>
		<form method="POST" action="<?php echo BASE_URL;?>index.php/execute_log_in" class="log_in_content">
			<h1 style="margin: 1%; font-size: 2vw">Autentifică-te</h1>
			<?php
				global $error;
				if(isset($error)){
					echo "<span class='eroare_style'>".$error."</span>";
				}
			?>
			<p>Pentru a te autentifica, completează câmpurile de mai jos</p>
			<hr>
			<label for="Nume_cont"><b>Nume cont: </b></label><br>
			<input type="text" name="Nume_cont" placeholder="Scrie aici numele tău de cont" required>
			<br>
			<label for="Parola"><b>Parola: </b></label><br>
			<input type="password" name="Parola" required>
			<br>
			<label for="cal">Alege calitatea: </label>
			<select name="cal">
				<option value="elev">Elev</option>
				<option value="profesor">Profesor</option>
				<option value="parinte">Părinte</option>
			</select>
			<div class="clear">
				<button type="reset" id="reset_btn">Reset</button>
				<button type="submit" id="submit_btn">Trimite</button>
			</div>
		</form>
	</article>
</body>
</html>