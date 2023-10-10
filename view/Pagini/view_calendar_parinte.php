<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Calendar examene copii</title>
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
		include_once "view/Pagini/Partiale/alerte.php";
		include_once "view/Pagini/Partiale/antet_parinte.php";
		include_once "view/Pagini/Partiale/meniu_parinte.php";
	?>
	<div style= "text-align:center;">
		<h1 style=" font-size: 2vw;">
			<a href="<?php echo BASE_URL;?>index.php/view_panou_parinte">
				&#8810;
			</a>  
			Calendarul examinarilor copiilor
		</h1>
	</div>
	<?php
		include_once "model/functii_select.php";
		include_once "model/functii_examene.php";
		$result = list_copii_parinte($_SESSION['id_cont_parinte']);
		if(count($result)>0){
			echo "
				<div class='table-responsive' style=' font-size: 1vw;'>
					<table class='table table-striped'>
						<thead class='thead-dark'>
							<tr>
								<th>Nume elev</th>
								<th>Data</th>
								<th>Testul</th>
								<th>Nume disciplina</th>
							</tr>
						</thead>
						<tbody>
			";
			foreach ($result as $row) {
				$examene = list_examene($row['ID_Clasa']);
				foreach($examene as $test){
					echo "
						<tr>
							<td>".$row['Nume']." ".$row['Prenume']."</td>
							<td>".$test['Data']."</td>
							<td>".$test['Titlu']."</td>
							<td>".$test['Nume_disciplina']."</td>
						</tr>
					";
				}
			}
		}else{
			echo "Nu ai selectat niciun copil inca";
			echo "<br>";
			echo "<a href='".BASE_URL."index.php/view_select_copil'>Selecteaza acum un copil.</a>";
		}
	?>
</body>
</html>