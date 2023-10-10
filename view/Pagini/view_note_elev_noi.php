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
	<title>Vizualizare note</title>

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
		include_once "view/Pagini/Partiale/meniu_optiuni_note_elev.php";
	?>
<div style= "text-align:center;">
	<h1 style=" font-size: 2vw;">
		<a href="<?php echo BASE_URL;?>index.php/view_panou_note_elev">
			&#8810;
		</a>  
		Vizualizare note
	</h1>
</div>
<article>
	<a href="<?php echo BASE_URL;?>index.php/view_panou_note_elev">
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
			<button class="button_discipline button_ordonare button_filtru" id="btn_filtru" 
			onclick="openNavFiltrat()">
					Filtru
			</button>
		</div>
	</a>
</article>
<br>
<article>
	<aside class="optiune">
		&#128200;
		Media generala:
		<?php
			include_once "model/functii_elev_note.php";
			$nota = sprintf('%0.2f',media_generala($_SESSION['id_cont_elev']));
			echo $nota;
		?>
		<br>
	</aside>
	<aside class="optiune">
		&#128200; 
		Rezultate de exceptie:
		<?php
			include_once "model/functii_elev_note.php";
			$res = rezultate($_SESSION['id_cont_elev']);
			echo count($res);
		?>
		<br>
		<a href="<?php echo BASE_URL;?>index.php/view_elev_exceptii">Vezi rezultatele</a>
	</aside>
</article>
<article>
	<?php
		include_once "model/functii_elev_note.php";
		$note = list_note_ordonate_noi($_SESSION['id_cont_elev']);
		if(count($note)>0){
			echo "
				<div class='table-responsive' style=' font-size: 1vw;'>
					<table class='table table-striped'>
						<thead class='thead-dark'>
							<tr>
								<th>Data</th>
								<th>Disciplina</th>
								<th>Nota</th>
							</tr>
						</thead>
						<tbody>
			";
			foreach ($note as $row) {
				echo "
					<tr>
						<td>".$row['Data_nota']."</td>
						<td>".$row['Nume_disciplina']."</td>
						<td>".$row['Nota']."</td>
					</tr>
				";
			}
			echo "
						</tbody>
					</table>
				</div>
			";
		}else{
		 	echo "Nu ai note inca";
		}
	?>
</article>
</body>
</html>