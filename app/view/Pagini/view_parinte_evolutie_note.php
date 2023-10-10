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
	<title>Vezi evolutia notelor</title>
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
	<br><br>

<script src='<?php echo BASE_URL;?>libraries/Charts/Chart.min.js'></script>
<script src='<?php echo BASE_URL;?>libraries/Charts/utils.js'></script>
	<?php
		include_once "model/functii_elev_note.php";
		$discipline = list_note($_GET['copil']);
		foreach($discipline as $key => $row){
			echo "<h2>".$row[0]['Nume_disciplina']."</h2><br>";
			echo "
				<div style='width:45%; margin-left: 2%; display: inline-block;'>
					<canvas id='canvas".$key."'></canvas>
				</div>"
			;
			echo "
				<div style='width:45%; display: inline-block;'>
					<canvas id='canvas2".$key."'></canvas>
				</div>"
			;
		}

		echo "<script>";
		foreach($discipline as $key => $row){
			echo "
						var config".$key." = {
							type: 'line',
							data: {
								labels: [";
										foreach($row as $rand){
											echo "'".$rand['Data_nota']."',";
										}
			echo "
								],
								datasets: [{
									label: 'Notele',
									backgroundColor: '#0c7ca5',
									borderColor: '#0c7ca5',
									data: [";
											foreach($row as $var){
												echo $var['Nota'].",";
											}
			echo "
									],
									fill: false,
								}]
							},
							options: {
								responsive: true,
								title: {
									display: true,
									text: 'Evolutie note'
								},
								tooltips: {
									mode: 'index',
									intersect: false,
								},
								hover: {
									mode: 'nearest',
									intersect: true
								},
								scales: {
									xAxes: [{
										display: true,
										scaleLabel: {
											display: true,
											labelString: 'Data calendaristica'
										}
									}],
									yAxes: [{
										display: true,
										ticks: {
								            min: 0,
								            max: 10
								        }
									}]
								}
							}
						};";

			echo "
						var config2".$key." = {
							type: 'bar',
							data: {
								labels: [";
										foreach($row as $rand){
											echo "'".$rand['Data_nota']."',";
										}
			echo "
								],
								datasets: [{
									label: 'Notele',
									backgroundColor: '#0c7ca5',
									borderColor: '#0c7ca5',
									data: [";
											foreach($row as $var){
												echo $var['Nota'].",";
											}
			echo "
									],
									fill: false,
								}]
							},
							options: {
								responsive: true,
								title: {
									display: true,
									text: 'Evolutie note'
								},
								tooltips: {
									mode: 'index',
									intersect: false,
								},
								hover: {
									mode: 'nearest',
									intersect: true
								},
								scales: {
									xAxes: [{
										display: true,
										scaleLabel: {
											display: true,
											labelString: 'Data calendaristica'
										}
									}],
									yAxes: [{
										display: true,
										ticks: {
								            min: 0,
								            max: 10
								        }
									}]
								}
							}
						};";
			}
				echo "
						window.onload = function() {";
				foreach($discipline as $key => $row){
						echo "
							var ctx".$key." = document.getElementById('canvas".$key."').getContext('2d');
							window.myLine".$key." = new Chart(ctx".$key.", config".$key.");";
						echo "
							var ctx1".$key." = document.getElementById('canvas2".$key."').getContext('2d');
							window.myLine".$key." = new Chart(ctx1".$key.", config2".$key.");";
				}
						echo "};
	
					</script>
			";
	?>
</body>
</html>