<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_discipline.php";
	if(trim($_POST['id'])==""){
		redirect('error');
	}
	if(trim($_POST['nume_disciplina'])==""){
		$error = "Introduceți numele";
	}
	if(!isset($error)){
		$connect = edit_disciplina($_POST['id'],$_POST['nume_disciplina']);
		if($connect == TRUE){
			redirect('view_discipline_general');
		} else {
			redirect('error');
		}
	}else{
		redirect('view_edit_disciplina');
	}
?>