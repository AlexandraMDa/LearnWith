<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_clase.php";
	if(trim($_POST['id'])==""){
		redirect('error');
	}
	if(trim($_POST['denumire_noua'])==""){
		$error = "Introduceți numele";
	}
	if(!isset($error)){
		$connect = edit_clasa($_POST['id'],$_POST['denumire_noua']);
		if($connect == TRUE){
			redirect('view_clase');
		} else {
			redirect('error');
		}
	}else{
		redirect('edit_clasa');
	}
?>