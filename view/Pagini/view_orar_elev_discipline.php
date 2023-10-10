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
	<title>Orarul tau</title>

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
		<h1 style=" font-size: 2vw; overflow: hidden;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_elev">
				&#8810;
			</a>  
			Orarul clasei 
				<?php
					include_once "model/functii_select.php";
					$result = select_clase_elev($_SESSION['id_cont_elev']);
					echo $result[0]['Nume_clasa'];
				?>
		</h1>
	</div>
	<?php
		include_once "model/functii_orar.php";
		include_once "model/functii_select.php";
		$orar = list_orar($result[0]['ID_Clasa']);
		if(count($orar)>0){
			echo "
				<a href='".BASE_URL."index.php/view_orar_elev'>
					<button class='button_discipline'>
						<span>
							Vezi pe zile 
						</span>
					</button>
				</a>
			";
			$discipline = select_discipline($_SESSION['id_cont_elev']);
			foreach($discipline as $row){
				echo "<h2 style='padding-left: 4%;'>".$row['Nume_disciplina']."</h2><br>";
				echo "
					<div class='table-responsive' style=' font-size: 1vw;'>
						<table class='table table-striped'>
							<thead class='thead-dark'>
								<tr>
									<th>Ziua</th>
									<th>Orele</th>
								</tr>
							</thead>
							<tbody>
				";
				foreach($orar as $rand){
					if($rand['ID_Disciplina']==$row['ID_Disciplina']){
						echo "
							<tr>
								<td>".$rand['Ziua']."</td>
								<td>".$rand['Interval_orar']."</td>
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
			echo "Nu exista inca un orar";
		}
	?>
</body>
</html>