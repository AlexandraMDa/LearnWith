<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)&&!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	if(array_key_exists('id_cont_elev', $_SESSION)){
		$x = $_SESSION['id_cont_elev'];
	}else{
		$x = $_GET['id'];
	}
?>
<!DOCTYPE html>
<html>
<head>
					<!-- Bara de titlu -->
	<title>Vezi evolutia absentelor</title>

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
		<a href="<?php echo BASE_URL;?>index.php/view_evolutie_elev">
			&#8810;
		</a>  
		Vizualizare evolutie pe absente
	</h1>
</div>
	<br><br>
	<script src="<?php echo BASE_URL;?>libraries/Charts/Chart.min.js"></script>
	<script src="<?php echo BASE_URL;?>libraries/Charts/utils.js"></script>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic total absente pe luni</h1>
		<canvas id="canvas1"></canvas>
	</div>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic total absente pe discipline</h1>
		<canvas id="canvas2"></canvas>
	</div>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic absente motivate pe luni</h1>
		<canvas id="canvas3"></canvas>
	</div>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic absente motivate pe discipline</h1>
		<canvas id="canvas4"></canvas>
	</div>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic absente nemotivate pe luni</h1>
		<canvas id="canvas5"></canvas>
	</div>
	<div style="width:40%; float: left; padding: 3%;border: #ccc groove 2px; margin-right: 3%;margin-left: 2%;">
		<h1 style="text-align: center;">Grafic absente nemotivate pe discipline</h1>
		<canvas id="canvas6"></canvas>
	</div>
	<?php
		include "model/functii_elev_absente.php";
	  	$result = absente_pe_luni($x);
	  	$result1 = nr_absente_discipline($x);
	  	$result3 = absente_pe_luni_motivate($x);
	  	$result4 = absente_pe_discipline_motivate($x);
	  	$result5 = absente_pe_luni_nemotivate($x);
	  	$result6 = absente_pe_discipline_nemotivate($x);
	?>
	<script>
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
							foreach($result as $row){
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
		var config2 = {
			type: 'bar',
			data: {
				labels: [
					<?php
						foreach ($result1 as $key => $value) {
							echo "'".$value[0]['Nume_disciplina']."',";
						}
					?>
				],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach ($result1 as $key => $value) {
								echo $value[0]['nr'].",";
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
					text: 'Absente general pe discipline'
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
		var config3 = {
			type: 'bar',
			data: {
				labels: ['Sep','Oct','Noi','Dec','Ian','Feb','Mar','Apr','Mai','Iun','Iul','Aug'],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach($result3 as $row){
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
					text: 'Absente motivate pe luni'
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
		var config4 = {
			type: 'bar',
			data: {
				labels: [
					<?php
						foreach ($result4 as $key => $value) {
							echo "'".$value[0]['Nume_disciplina']."',";
						}
					?>
				],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach ($result4 as $key => $value) {
								echo $value[0]['nr'].",";
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
					text: 'Absente motivate pe discipline'
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
		var config5 = {
			type: 'bar',
			data: {
				labels: ['Sep','Oct','Noi','Dec','Ian','Feb','Mar','Apr','Mai','Iun','Iul','Aug'],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach($result3 as $row){
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
					text: 'Absente nemotivate pe luni'
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
		var config6 = {
			type: 'bar',
			data: {
				labels: [
					<?php
						foreach ($result6 as $key => $value) {
							echo "'".$value[0]['Nume_disciplina']."',";
						}
					?>
				],
				datasets: [{
					label: 'Disciplinele',
					backgroundColor: '#0c7ca5',
					borderColor: '#0c7ca5',
					data: [
						<?php
							foreach ($result6 as $key => $value) {
								echo $value[0]['nr'].",";
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
					text: 'Absente nemotivate pe discipline'
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
			var ctx1 = document.getElementById('canvas1').getContext('2d');
			window.myLine1 = new Chart(ctx1, config1);
			var ctx2 = document.getElementById('canvas2').getContext('2d');
			window.myLine2 = new Chart(ctx2, config2);
			var ctx3 = document.getElementById('canvas3').getContext('2d');
			window.myLine3 = new Chart(ctx3, config3);
			var ctx4 = document.getElementById('canvas4').getContext('2d');
			window.myLine4 = new Chart(ctx4, config4);
			var ctx5 = document.getElementById('canvas5').getContext('2d');
			window.myLine5 = new Chart(ctx5, config5);
			var ctx6 = document.getElementById('canvas6').getContext('2d');
			window.myLine6 = new Chart(ctx6, config6);
		};
	</script>
</body>
</html>