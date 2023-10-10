<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_clase.php";
	if(trim($_POST['nume_clasa'])==""){
		$error = "Intrude numele clasei";
		redirect('view_adauga_clasa');
		exit();
	}
	if(!isset($error)){
		$connect = introdu_clasadb($_POST['nume_clasa'],$_POST['discipline'],$_SESSION['id_cont_prof']);
		if($connect==TRUE){
			redirect('view_clase_general');
			exit();
		}
		redirect('view_clase_general');
	}
?>