<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_parinte_select_copil.php";
	$result = copii($_SESSION['id_cont_parinte']);
	$ok=0;
	foreach($result as $row){
		if($row['ID_Copil']==$_GET['id']) $ok=1;
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
			<a href="<?php echo BASE_URL;?>index.php/view_copii_general">
				&#8810;
			</a>  
			<?php
				include_once "model/functii_select.php";
				$elev = get_copil($_GET['id']);
				echo $elev[0]['Nume']." ".$elev[0]['Prenume'];
			?>
		</h1>
	</div>
	<aside class="optiune">
		&#9745;
		Media generala:
		<?php
			include_once "model/functii_elev_note.php";
			$nota = media_generala($elev[0]['ID_Clasa']);
			if($nota==-1) echo "Nu ai note";
			else echo $nota;
		?>
		<br>
	</aside>
	<aside class="optiune">
		&#9745;
		Total absente:
		<?php
			include_once "model/functii_elev_absente.php";
			$absente = total_absente($elev[0]['ID_Clasa']);
			echo $absente;
		?>
	</aside>
	<br>

	<script src="<?php echo BASE_URL;?>libraries/Charts/Chart.min.js"></script>
	<script src="<?php echo BASE_URL;?>libraries/Charts/utils.js"></script>
	<div style="width:45%; display: inline-block; float: right;">
		<canvas id="canvas"></canvas>
		<a href="<?php echo BASE_URL;?>index.php/view_parinte_note?copil=<?php echo $_GET['id']; ?>">Vezi note</a>
		<a href="<?php echo BASE_URL;?>index.php/view_parinte_evolutie_note?copil=<?php echo $_GET['id']; ?>" style="margin-left: 73%">Vezi evolutie note</a>
	</div>
	<div style="width:45%; display: inline-block;">
		<canvas id="canvas1"></canvas>
		<a href="<?php echo BASE_URL;?>index.php/view_parinte_absente?copil=<?php echo $_GET['id']; ?>">Vezi absente</a>
		<a href="<?php echo BASE_URL;?>index.php/view_parinte_evolutie_absente?copil=<?php echo $_GET['id']; ?>" style="margin-left: 68%">Vezi evolutie absente</a>
	</div>
	<?php
	  $result = list_note_general($_GET['id']);
	  $result1 = absente_pe_luni($_GET['id']);
	?>
	<script>
		var config = {
			type: 'line',
			data: {
				labels: [
					<?php
						foreach($result as $row){
							echo "'".$row['Data_nota']."',";
						}
					?>
				],
				datasets: [{
					label: 'Notele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach($result as $row){
								echo $row['Nota'].",";
							}
						?>
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
						scaleLabel: {
							display: true,
							labelString: 'Note'
						}
					}]
				}
			}
		};
		var config1 = {
			type: 'bar',
			data: {
				labels: ['Sep','Oct','Noi','Dec','Ian','Feb','Mar','Apr','Mai','Iun','Iul','Aug'],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach($result1 as $row){
								echo $row[0]['nr'].",";
							}
						?>
					],
					fill: false,
				}]
			},
			options: {
				responsive: true,
				title: {
					display: true,
					text: 'Absente general pe luni'
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
						ticks: {
				            min: 0,
				            stepSize: 1
				        }
					}]
				}
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('canvas').getContext('2d');
			window.myLine = new Chart(ctx, config);
			var ctx1 = document.getElementById('canvas1').getContext('2d');
			window.myLine1 = new Chart(ctx1, config1);
		};
	</script>
</body>
</html>