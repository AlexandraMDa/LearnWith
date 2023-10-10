<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_parinte_select_copil.php";
	$result = copii($_SESSION['id_cont_parinte']);
	$ok=0;
	foreach($result as $row){
		if($row['ID_Copil']==$_GET['copil']) $ok=1;
	}
	if($ok==0){
		redirect('error');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Vizualizare evolutie</title>
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
			<a href="<?php echo BASE_URL;?>index.php/view_copil_singur?id=<?php echo $_GET['copil'];?>">
				&#8810;
			</a>  Note
		</h1>
	</div>
	<?php
		include_once "model/functii_elev_note.php";
		$note = list_note_general($_GET['copil']);
		if(count($note)>0){
			echo "
				<div class='table-responsive' style=' font-size: 1vw;'>
					<table class='table table-striped'>
						<thead class='thead-dark'>
							<tr>
								<th>Data</th>
								<th>Disciplina</th>
								<th>Nota</th>
							</tr>
						</thead>
						<tbody>
			";
			foreach ($note as $row) {
				echo "
					<tr>
						<td>".$row['Data_nota']."</td>
						<td>".$row['Nume_disciplina']."</td>
						<td>".$row['Nota']."</td>
					</tr>
				";
			}
			echo "
						</tbody>
					</table>
				</div>
			";
		}else{
		 	echo "Nu are note inca";
		}
	?>
</body>
</html>