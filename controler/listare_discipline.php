<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_php.php";
	$result = list_disciplina($_SESSION['id_cont_prof']);
	if ($result->num_rows > 0) {
	// output data of each row
	echo "		        
	<table class='table-striped'>
		<tr>
			<th>Nr.Crt.</th>
			<th>Nume disciplină</th>
			<th>Clasa</th>
			<th>Şterge disciplină</th>
			<th>Editare disciplina</th>
		</tr>
	";
	while($row = $result->fetch_assoc()) {
	    echo " 
	        <tr>
	    		<td>".$row["ID_Disciplina"]."</td>
	    		<td>".$row["Nume_disciplina"]."</td>
	    		<td>".$row["ID_Clasa"]."</td>
	    		<td>.<button>Şterge</button></td>
	    		<td>.<button>Editează</button></td>
	    	</tr>
	    ";
	}
	echo "
		<tr>
			<td colspan='5'><a href='index.php?pagina=formular_inscrie_disciplina'>Adaugă o disciplină nouă</a></td>
		</tr>
	";
	echo "</table>";
	} else {
	echo "Nu snt discipline inca";
	}
?>
