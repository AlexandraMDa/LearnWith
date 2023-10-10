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
	<title>Evolutie pe clase</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_evolutii_clase">
				&#8810;
			</a>  
			Evolutiile claselor tale
		</h1>
	</div>
	<?php
		echo "
			<div style='width:75%;'>
				<canvas id='canvas'></canvas>
			</div>

				<script src='<?php echo BASE_URL;?>libraries/Charts/Chart.min.js'></script>
				<script src='<?php echo BASE_URL;?>libraries/Charts/utils.js'></script>
				<div style='width:75%;'>
					<canvas id='canvas'></canvas>
				</div>";
				include_once "model/functii_evolutie.php";
				  $result = suma_note_general($_GET['id']);
		echo "
				<script>
					var NOTE = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
					var config = {
						type: 'line',
						data: {
							labels: [";
									foreach($result as $row){
										echo "'".$row['Data_nota']."',";
									}
		echo "					],
							datasets: [{
								label: 'Notele',
								backgroundColor: '#0c7ca5',
								borderColor: '#0c7ca5',
								data: [";
										foreach($result as $row){
											echo $row['Nota'].",";
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
								text: 'Chart.js Line Chart'
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

					window.onload = function() {
						var ctx = document.getElementById('canvas').getContext('2d');
						window.myLine = new Chart(ctx, config);
					};

					document.getElementById('randomizeData').addEventListener('click', function() {
						config.data.datasets.forEach(function(dataset) {
							dataset.data = dataset.data.map(function() {
								return randomScalingFactor();
							});

						});

						window.myLine.update();
					});

					var colorNames = Object.keys(window.chartColors);
					document.getElementById('addDataset').addEventListener('click', function() {
						var colorName = colorNames[config.data.datasets.length % colorNames.length];
						var newColor = window.chartColors[colorName];
						var newDataset = {
							label: 'Dataset ' + config.data.datasets.length,
							backgroundColor: newColor,
							borderColor: newColor,
							data: [],
							fill: false
						};

						for (var index = 0; index < config.data.labels.length; ++index) {
							newDataset.data.push(randomScalingFactor());
						}

						config.data.datasets.push(newDataset);
						window.myLine.update();
					});
				</script>
		";
	?>
</body>
</html>