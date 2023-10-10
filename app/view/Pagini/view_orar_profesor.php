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
		include_once "view/Pagini/Partiale/antet_prof.php";
		include_once "view/Pagini/Partiale/meniu_prof.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_prof">
				&#8810;
			</a>  
			Orarul tau
		</h1>
	</div>
	<?php
		$ZILE = ['Luni','Marti','Miercuri','Joi','Vineri'];
		include_once "model/functii_orar.php";
		$orar_complet = list_orar_prof($_SESSION['id_cont_prof']);
		if(count($orar_complet)>0){
			echo "
				<a href='".BASE_URL."index.php/view_orar_prof_discipline'>
					<button class='button_discipline'>
						<span>
							Vezi pe discipline 
						</span>
					</button>
				</a>
			";
			for($i=0;$i<5;$i++){
				echo "<h2 style='padding-left: 3%;'>".$ZILE[$i]."</h2><br>";
				echo "
				<div class='table-responsive' style=' font-size: 1vw;'>
					<table class='table table-striped'>
						<thead class='thead-dark'>
							<tr>
								<th>Ziua</th>
								<th>Orele</th>
								<th>Disciplina</th>
								<th>Clasa</th>
							</tr>
						</thead>
						<tbody>
			";
				$orar_complet = list_orar_prof_zi($_SESSION['id_cont_prof'],$ZILE[$i]);
				foreach ($orar_complet as $row) {
					echo "
						<tr>
							<td>".$row['Ziua']."</td>
							<td>".$row['Interval_orar']."</td>
							<td>".$row['Nume_disciplina']."</td>
							<td>".$row['Nume_clasa']."</td>
						</tr>
					";
				}
				echo "
							</tbody>
						</table>
					</div>
				";
			}
			
			
		}else{
		 	echo "Nu exista un orar pentru tine inca";
		}
	?>
</body>
</html>
