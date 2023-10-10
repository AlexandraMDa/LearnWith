<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
			<!-- BARA DE TITLU-->
	<title>Panou clasa</title>

					<!-- Informatiile meta -->

	<meta charset="utf-8">
	<meta name="description" content="Platforma de invatare a scolii tale">
	<meta name="keywords" content="platforma,invatare,liceu,scoala">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<?php
		include_once "view/Pagini/Partiale/header.php";
	?>
	<script src="<?php echo BASE_URL;?>libraries/angular/angular.min.js"></script>
	<script src="<?php echo BASE_URL;?>view/surse_js/gestionare.js"></script>
</head>
<body>
	<?php
		include_once "view/Pagini/Partiale/antet_prof.php";
		include_once "view/Pagini/Partiale/meniu_prof.php";
	?>
	

	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_discipline_general">
				&#8810;
			</a>  
			Clasa 
			<?php
			 	include_once "model/functii_select.php";
			 	$result = list_clase_discipline($_GET['id']);
			 	echo $result[0]['Nume_clasa'];
			?>
		</h1>
		<h1 style="font-size: 2vw;">
			Disciplina
			<?php
			 	echo $result[0]['Nume_disciplina'];
			?>
		</h1>
	</div>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
	?>
	<h1>Note</h1>
	<?php
		include_once "model/functii_select.php";
		$elevi = list_elevi_clasa($result[0]['ID_Clasa']);
		if(count($elevi)>0){
			foreach($elevi as $row){
				echo "<h1>".$row['Nume']." ".$row['Prenume'];
				echo "
					<div class='table-responsive' style=' font-size: 1vw;'>
						<table class='table table-striped'>
							<thead class='thead-dark'>
								<tr>
									<th>Data</th>
									<th>Nota</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
				";
				include_once "model/functii_select.php";
				$note = list_discipline_note($_GET['id'],$row['ID_Elev']);
				foreach ($note as $mark) {
					echo "
						<tr>
							<td>".$mark['Data_nota']."</td>
							<td>".$mark['Nota']."</td>
							<td><a href='".BASE_URL."index.php/view_edit_nota?id=".$mark['ID_Nota']."'><button style='color: white;'>Editeaza nota</button></a></td>
							<td><a href='".BASE_URL."index.php/view_sterge_nota?id=".$mark['ID_Nota']."'><button style='color: white;background-color:red;'>Sterge nota</button></a></td>
						</tr>
					";
				}
				echo "
							</tbody>
						</table>
					</div>
				";
				echo "<a href='".BASE_URL."index.php/view_adauga_nota?id=".$row['ID_Elev']."&id_disciplina=".$_GET['id']."'>Adauga o nota</a>";
			}
		}else{
		 	echo "Nu sunt elevi inca";
		}
	?>
	<h1>Absente</h1>
	<?php
		if(count($elevi)>0){
			foreach($elevi as $row){
				echo "<h1>".$row['Nume']." ".$row['Prenume'];
				echo "
					<div class='table-responsive' style=' font-size: 1vw;'>
						<table class='table table-striped'>
							<thead class='thead-dark'>
								<tr>
									<th>Data</th>
									<th>Motivat</th>
									<th></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
				";
				include_once "model/functii_select.php";
				$note = list_discipline_absente($_GET['id'],$row['ID_Elev']);
				foreach ($note as $mark) {
					echo "
						<tr>
							<td>".$mark['Data']."</td>
							<td>".$mark['Motivat']."</td>
							<td><a href='".BASE_URL."index.php/view_edit_absenta?id=".$mark['ID_Absenta']."'><button style='color: white;'>Editeaza absenta</button></a></td>
							<td><a href='".BASE_URL."index.php/view_sterge_absenta?id=".$mark['ID_Absenta']."'><button style='color: white;background-color:red;'>Sterge absenta</button></a></td>
						</tr>
					";
				}
				echo "
							</tbody>
						</table>
					</div>
				";
				echo "<a href='".BASE_URL."index.php/view_adauga_absenta?id=".$row['ID_Elev']."&id_disciplina=".$_GET['id']."'>Adauga o absenta</a>";
			}
		}else{
		 	echo "Nu sunt elevi inca";
		}
	?>
</div>
</body>
</html>