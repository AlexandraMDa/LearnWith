<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof.php";
	if(trim($_POST['nota'])==""){
		$error = "Introduceți o nota";
	}
	if(!isset($error)){
		$connect = introdu_nota($_POST['id_elev'],$_POST['id_disciplina'],$_POST['data'],$_POST['nota']);
		if($connect==true){
			redirect('view_discipline_general');
		}else{
			redirect('error');
		}
	}
?>