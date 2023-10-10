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
	<title>Vizualizare materiale</title>

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
			Vizualizarea materialelor
		</h1>
	</div>
	<?php
		include_once "model/functii_select.php";
		$result = list_discipline($_SESSION['id_cont_prof']);
		if(count($result)>0){
			echo "
			<div class='table-responsive' style=' font-size: 1vw;'>
				<table class='table table-striped'>
					<thead class='thead-dark'>
						<tr>
							<th>Nume disciplina</th>
							<th>Clase</th>
							<th>Optiuni</th>
						</tr>
					</thead>
					<tbody>
			";
			foreach($result as $row){
				echo "
						<tr>
							<td>".$row['Nume_disciplina']."</td>
							<td>";
						echo $row['Nume_clasa']."<br>";
				echo"
							</td>
							<td>
								<a href='".BASE_URL."index.php/form_intro_material?id=".$row['ID_Disciplina']."'>
									<button style='color: white;'>Adauga materiale</button>
								</a>
							</td>
						</tr>
				";
			}
			echo "
					</tbody>
				</table>
			</div>
			";
		}else echo "Nu sunt adaugate discipline inca";
	?>
</body>
</html>