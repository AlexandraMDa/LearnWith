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
	<title>Vizualizare note cu filtru</title>

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
			<?php
				$nr = $_GET['id'];
				if($nr>4){
					echo "Note peste ".$nr."<br>";
				} else echo "Note sub 5<br>";
			?>
		</h1>
	</div>
<article>
	<?php
		global $nr;
		include_once "model/functii_elev_note.php";
		$note = list_note_filtrate($_SESSION['id_cont_elev'],$nr);
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
			if($nr>4){
				echo "Nu ai note peste inca ".$nr."<br>";
			} else echo "Nu ai note sub 5 inca<br>";
		}
	?>
</article>
</body>
</html>