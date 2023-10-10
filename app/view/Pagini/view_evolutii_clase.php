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
	<title>Evolutiile claselor</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_clase_general">
				&#8810;
			</a>  
			Evolutiile claselor tale
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
							<th>Nume clasa</th>
							<th>Disciplina</th>
							<th>Optiuni</th>
						</tr>
					</thead>
					<tbody>
			";
			foreach($result as $row){
				echo "
						<tr>
							<td>
								<a href='<?php echo BASE_URL;?>index.php/view_panou_clasa'>".$row['Nume_clasa']."</a>
							</td>
							<td>
				";
				foreach($result as $rand){
					if($rand['Nume_clasa']==$row['Nume_clasa']){
						echo $rand['Nume_disciplina']."<br>";
					}
				}
				echo"
							</td>
							<td><a href='".BASE_URL."index.php/view_grafic_clasa?id=".$row['ID_Clasa']."'>
								<button>Vezi evolutie</button>
							</a></td>
						</tr>
				";
			}
			echo "
					</tbody>
				</table>
			</div>
			";
		}else echo "Nu sunt adaugate clase inca";
	?>
</body>
</html>