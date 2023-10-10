<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	if(trim($_GET['continut'])==""){
		$error = "Adaugati continut";
	}
	if(!isset($error)){
		include_once "model/functii_prof_introdu.php";
		$connect = intro_material($_GET['continut'],$_GET['disciplina']);
		if($connect==TRUE){
			redirect('view_materiale_general');
		}else{
			redirect('error');
		}
	}else{
		redirect('form_intro_material');
	}
?>