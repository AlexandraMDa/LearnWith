<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_discipline.php";
	$connect = sterge_disciplina($_GET['id']);
	if($connect == FALSE){
		redirect('error');
	}else{
		redirect('view_discipline_general');
	}
?>