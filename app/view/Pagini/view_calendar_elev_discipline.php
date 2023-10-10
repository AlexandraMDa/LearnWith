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
	<title>Calendar examene</title>

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
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_elev">
				&#8810;
			</a>  
			Examenele clasei 
				<?php
					include_once "model/functii_select.php";
					$result = select_clase_elev($_SESSION['id_cont_elev']);
					echo $result[0]['Nume_clasa'];
				?>
		</h1>
	</div>
	<?php
		echo"	
			<a href='".BASE_URL."index.php/view_calendar_elev'>
				<button class='button_discipline'>
					<span>
						Vizualizare generala 
					</span>
				</button>
			</a>
		";
		include_once "model/functii_examene.php";
		$calendar_complet = list_examene($result[0]['ID_Clasa']);
		if(count($calendar_complet)>0){
			include_once "model/functii_select.php";
			$discipline = select_discipline($_SESSION['id_cont_elev']);
			foreach($discipline as $row){
				echo "<h2 style='padding-left: 4%;'>".$row['Nume_disciplina']."</h2><br>";
				echo "
					<div class='table-responsive' style=' font-size: 1vw;'>
						<table class='table table-striped'>
							<thead class='thead-dark'>
								<tr>
									<th>Data</th>
									<th>Titlu</th>
									<th>Descriere</th>
								</tr>
							</thead>
							<tbody>
				";
				foreach ($calendar_complet as $rand) {
					if($rand['ID_Disciplina']==$row['ID_Disciplina']){
						echo "
							<tr>
								<td>".$rand['Data']."</td>
								<td>".$rand['Titlu']."</td>
								<td>".$rand['Descriere']."</td>
							</tr>
						";
					}
				}
				echo "
							</tbody>
						</table>
					</div>
				";
			}
		}else{
		 	echo "Nu exista examene pentru clasa ta inca";
		}
	?>
</body>
</html>