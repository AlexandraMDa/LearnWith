<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_parinte_select_copil.php";
	$copil = selecteaza_copil($_POST['cod']);
	if($copil == FALSE){
		$mesaj = "Nu exista copilul selectat";
		redirect('selecteaza_copil');
		exit();
	}
	$var1 = selecteaza_copil($copil[0]['ID_Elev'],$_SESSION['id_cont_parinte']);
	if($var1 == FALSE){
		$var = introdu_parinte_copil($copil[0]['ID_Elev'],$_SESSION['id_cont_parinte']);
		if($var){
			$mesaj = "Copil adaugat";
		}
		redirect('view_panou_parinte');
		exit();
	}
	$mesaj = "Copilul este deja selectat";
	redirect('selecteaza_copil');
?>