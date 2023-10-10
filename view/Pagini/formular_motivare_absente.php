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
	<title>Panou clasa</title>

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
			<a href="<?php echo BASE_URL;?>index.php/view_panou_clasa">
				&#8810;
			</a>  
			Clasa 
			<?php
			 	echo "aaaaa";
			?>
		</h1>
		<h1 style="font-size: 2vw;">
			Disciplina
			<?php
				echo "aaaaaaa";
			?>
		</h1>
	</div>
	<article>
		<a href="#">
			<button class="button_discipline">
				<span>
					Filtre 
				</span>
			</button>
		</a>
		<form style="text-align: center;">
			<input type="text" name="search" placeholder="Cauta..." class="button_search button_search_clasa">
		</form>
		<a href="#">
			<button class="button_discipline button_ordonare btn btn-dropdown button_ordonare_clasa">
				<span>
					Ordonare 
				</span>
			</button>
		</a>
		<a href="#">
			<button class="button_discipline button_ordonare button_filtru btn btn-dropdown button_filtru_clasa">
				<span>
					Vezi evolutie 
				</span>
			</button>
		</a>
	</article>
	<?php
		global $error;
		if(isset($error)){
			echo "<span class='eroare_style'>".$error."</span>";
		}
	?>
	<form method="POST" action="<?php echo BASE_URL;?>index.php/introdu_db">
	<div class="table-responsive" style="font-size: 1vw;">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th rowspan="2">Nume</th>
					<th colspan="2">Note
						<button type="submit" class="btn btn-primary btn_tabel">Trimite note</button>
						<button type="submit" class="btn btn-primary btn_tabel">Editeaza note</button>
					</th>
					<th colspan="2">Absente
						<button type="submit" class="btn btn-primary btn_tabel">Trimite absente</button>
						<button type="submit" class="btn btn-primary btn_tabel">Editeaza absente</button>
						<a href="<?php echo BASE_URL;?>index.php/view_prof_motivare">
							<button class="btn btn-primary btn_tabel">Motiveaza absente</button>
						</a>
						<a href="#"><button class="btn btn-primary btn_tabel">Sterge absente</button></a>
					</th>
					<th rowspan="2">Situatie</th>
				</tr>
				<tr>
					<th style="border-right: solid grey 1px;">
						nota
					</th>
					<th>
						data
					</th>
					<th style="border-right: solid grey 1px;">
						data
					</th>
					<th>
						motivat
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
					include_once "model/functii_select.php";
					$result = get_elevi(8);
					foreach($result as $row){
						echo "
							<tr>
								<td>".$row['Nume']." ".$row['Prenume']."</td>
								<td>".$row['Nota']."</td>
								<td>".$row['Data_nota']."</td>
								<td>".$row['Data']."</td>
								<td><input type='checkbox' name='absente_motivat' value='DA'>DA</td>
							</tr>
						";
					}
				?>
				<tr>
					<td></td>
					<td><input type="text" name="nota" placeholder="Nota" required></td>
					<td><input type="date" name="data_nota" required></td>
					<td><input type="date" name="data_absenta" required></td>
				</tr>
			</tbody>
		</table>
	</div>
	</form>
</body>
</html>