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
	<title>Vizualizare absente pe discipline</title>

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
		include_once "view/Pagini/Partiale/meniu_optiuni_absente_elev.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_elev">
				&#8810;
			</a>  
			Vizualizare absente pe discipline
		</h1>
	</div>
	<article>
		<a href="<?php echo BASE_URL;?>index.php/view_panou_absente_elev">
			<button class="button_discipline">
				<span>
					Vizualizare generala 
				</span>
			</button>
		</a>
		<a href="#">
			<div id="main">
				<button class="button_discipline button_ordonare" onclick="openNavOrdonat()">
						Ordonare 
				</button>
			</div>
		</a>
		<a href="#">
			<div id="main">
				<button class="button_discipline button_ordonare button_filtru" onclick="openNavFiltrat()">
					Filtru 
				</button>
			</div>
		</a>
	</article>
	<br>
	<article>
		<aside class="optiune">
			&#128200;
			Total absente:
			<?php
				include_once "model/functii_elev_absente.php";
				$absente = total_absente($_SESSION['id_cont_elev']);
				echo $absente;
			?>
			<br>
			<a href="<?php echo BASE_URL;?>index.php/view_elev_evolutie_absente">Vezi evolutia</a>
		</aside>
	</article>
	<br>
	<article>
		<?php
			include_once "model/functii_elev_absente.php";
			$absente = list_absente($_SESSION['id_cont_elev']);
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