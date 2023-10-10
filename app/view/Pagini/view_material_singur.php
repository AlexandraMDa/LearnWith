<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_select.php";
	include_once "model/functii_get_data.php";
	$result = get_data_elev($_SESSION['id_cont_elev']);
	$result1 = select_materiale($result[0]['ID_Clasa']);
	$ok=0;
	foreach($result as $row){
		if($row['ID_Material']==$_GET['id']) $ok=1;
	}
	if($ok==0){
		redirect('error');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vizualizare material</title>

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
			</a>  Vizualizare material
		</h1>
	</div>
	<br>
	<div style="width: 70%; font-style: Arial; font-size: 1vw;">
		<h1 style="text-align: center; font-size: 2vw;">Materialul</h1>
	</div>
</body>
</html>