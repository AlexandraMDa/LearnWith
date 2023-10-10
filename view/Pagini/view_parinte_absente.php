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
					<!-- Bara de titlu -->
	<title>Vizualizare copil</title>

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
			<?php
				echo "<a href = '".BASE_URL."index.php/view_copil_singur?id=".$_GET['copil']."'>"
			?>
				&#8810;
			<?php
				echo "</a>";
			?>

			<?php
				include_once "model/functii_select.php";
				$elev = get_copil($_GET['copil']);
				echo $elev[0]['Nume']." ".$elev[0]['Prenume'];
			?>
		</h1>
	</div>
	<article>
		<?php
			include_once "model/functii_elev_absente.php";
			$absente = list_absente($_GET['copil']);
			if(count($absente)>0){
				foreach ($absente as $rowdisc) {
					echo "
					<div class='table-responsive' style=' font-size: 1vw;'>
						<table class='table table-striped'>
							<thead class='thead-dark'>
								<tr>
									<th>Data</th>
									<th>Disciplina</th>
									<th>Motivat</th>
								</tr>
							</thead>
							<tbody>
					";
					echo "<h2>".$rowdisc[0]['Nume_disciplina']."</h2>";
					foreach ($rowdisc as $row) {
						echo "
							<tr>
								<td>".$row['Data']."</td>
								<td>".$row['Nume_disciplina']."</td>";
								if($row['Motivat']=="DA"){
									echo "<td style='color:#7aea76'>".$row['Motivat']."</td>";
								}else{
									echo "<td style='color:#c54853'>".$row['Motivat']."</td>";
								}
						echo "
							</tr>
						";
					}
				}
				echo "
							</tbody>
						</table>
					</div>
				";
			}else{
			 	echo "Nu ai absente inca";
			}
		?>
	</article>

</body>
</html>