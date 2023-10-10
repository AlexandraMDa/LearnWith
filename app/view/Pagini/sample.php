
<div style="width:75%;">
	<canvas id="canvas"></canvas>
</div>

	<script src="<?php echo BASE_URL;?>libraries/Charts/Chart.min.js"></script>
	<script src="<?php echo BASE_URL;?>libraries/Charts/utils.js"></script>
	<div style="width:75%;">
		<canvas id="canvas"></canvas>
	</div>
	<?php
	  $result = list_note_general($_SESSION['id_cont_elev']);
	?>
	<script>
		var NOTE = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
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