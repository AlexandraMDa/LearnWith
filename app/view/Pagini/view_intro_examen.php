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
	<title>Introdu un examen</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_panou_profesor">
				&#8810;
			</a>  
			Introdu un test
		</h1>
	</div>
	<form method="POST" action="<?php echo BASE_URL;?>index.php/execute_intro_examen" style="padding-left: 2%;"> 
		<?php
			global $error;
			if(isset($error)){
				echo "<span class='eroare_style'>".$error."</span>";
			}
		?>
		<br>
		<label for="Titlu"><b>Titlu: </b></label>
		<input  id="input_intro" type="text" name="Titlu" placeholder="Scrie aici titlul testului" required> 
		<br>
		<label for="Data"><b>Data: </b></label>
		<input  type="date" name="Data" required> 
		<br><br>
		<label for="Descriere"><b>Descriere: </b></label>
		<textarea name="Descriere"  id="input_intro" style="width: 40%; height: 30%;"></textarea>
		<br><br>
		<label for="Disciplina"><b>Disciplina: </b></label>
		<select name="Disciplina">
			<?php
				include_once "model/functii_examene.php";
				$discipline = list_clase_discipline_1($_SESSION['id_cont_prof']);
				if(count($discipline)>0){
					foreach($discipline as $row){
						echo "
							<option value='".$row['ID_Disciplina']."'>".$row['Nume_disciplina']." - ".$row['Nume_clasa']." ".$row['Profil']." ".$row['Specializare'].
							"</option>
						";
					}
				}else echo "Nu sunt discipline la clasa ta inca";
			?>
		</select>
		<br><br>
		<div class="clear">
			<button type="reset" id="reset_btn" style="color: white;">Reset</button>
			<button type="submit" id="submit_btn" style="color: white;">Trimite</button>
		</div>
	</form>
</body>
</html>