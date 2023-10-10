<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_elev', $_SESSION)&&!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_chat.php";
/* de testat sa fie accesibil doar de profii si elevii care trebuie*/
	$result = list_chat($_GET['id']);
	echo json_encode($result);
	for($i=0;$i<count($result);$i++){
		if($result[$i]['Tip_user']==1){
			$x = get_date_profesor($result[$i]['ID_User']);
			$result[$i]['ID_User'] = $x[0]['Nume']." ".$x[0]['Prenume'];
		}else{
			$y = get_date_elev($result[$i]['ID_User']);
			$result[$i]['ID_User'] = $y[0]['Nume']." ".$y[0]['Prenume'];
		}
	}
	print_r($result);
?>