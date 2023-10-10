<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
			<!-- BARA DE TITLU-->
	<title>Incarca o imagine</title>
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>

</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/antet_elev.php";
		include_once "view/Pagini/Partiale/meniu_elev.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_elev">
				&#8810;
			</a>  
			Adauga o poza de profil
		</h1>
	</div>
	<?php
		global $eroare;
		if(isset($eroare)){
			echo "<span class='eroare_style'>".$eroare."</span>";
		}
	?>
	<div>
		<form method="POST" action="<?php echo BASE_URL;?>index.php/introdu_poza_elevdb" enctype="multipart/form-data">
			<?php if (file_exists("view/Surse_imag/Conturi/conturi_elev/".$_SESSION['id_cont_elev'].".jpg")){ ?>
			<img src="<?php echo BASE_URL;?>/view/Surse_imag/Conturi/conturi_elev/<?php echo $_SESSION['id_cont_elev'];?>.jpg" style="float: left; width: 50%; height: auto; border: 4px groove #ccc; padding: 2%";>
			<?php }else{ ?>
			<img src="<?php echo BASE_URL;?>/view/Surse_imag/Panouri/student.png" 
			style="float: left; width: 30%; height: auto; border: 4px groove #ccc; padding: 2%">
			<?php } ?>
			<input type="file" name="fileToUpload" id="fileToUpload" class="choose_img">
			<button type="submit" name="Trimite imagine" name="submit" id="log" class="trim_img">
				<span style="font-size: 1vw;">Trimite imaginea</span>
			</button>
		</form>
	</div>
</body>
</html>