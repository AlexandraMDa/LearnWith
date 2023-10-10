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
	<title>Copil singur</title>
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
	  	$result = absente_pe_luni($_GET['copil']);
	  	$result1 = nr_absente_discipline($_GET['copil']);
	  	$result3 = absente_pe_luni_motivate($_GET['copil']);
	  	$result4 = absente_pe_discipline_motivate($_GET['copil']);
	  	$result5 = absente_pe_luni_nemotivate($_GET['copil']);
	  	$result6 = absente_pe_discipline_nemotivate($_GET['copil']);
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