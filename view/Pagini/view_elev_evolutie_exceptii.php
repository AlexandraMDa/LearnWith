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
	<title>Rezultate deosebite - evolutie</title>

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
		include_once "view/Pagini/Partiale/antet_elev.php";
		include_once "view/Pagini/Partiale/meniu_elev.php";
		include_once "view/Pagini/Partiale/meniu_optiuni_note_elev.php";
	?>
<div style= "text-align:center;">
	<h1 style=" font-size: 2vw;">
		<a href="<?php echo BASE_URL;?>index.php/view_panou_note_elev">
			&#8810;
		</a>  
		Vizualizare evolutie rezultate de exceptie
	</h1>
</div>
	<?php
		include_once "model/functii_elev_note.php";
	  $result = rezultate($_SESSION['id_cont_elev']);
	  if(count($result)>0){
			echo "
				<div class='table-responsive' style=' font-size: 1vw;'>
					<table class='table table-striped'>
						<thead class='thead-dark'>
							<tr>
								<th>Nume concurs</th>
								<th>Premiu</th>
								<th>Disciplina</th>
							</tr>
						</thead>
						<tbody>
			";
			foreach ($result as $row) {
				echo "
					<tr>
						<td>".$row['Nume_concurs']."</td>
						<td>".$row['Premiu']."</td>
						<td>".$row['Nume_disciplina']."</td>
					</tr>
				";
			}
			echo "
						</tbody>
					</table>
				</div>
			";
	  }else{
	  	echo "Nu ai rezultate la niciun concurs inca";
	  }
	?>
</body>
</html>