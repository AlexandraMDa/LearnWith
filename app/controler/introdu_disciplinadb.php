<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_discipline.php";
	if(trim($_POST['nume_disciplina'])==""){
		$error = "Introdu un nume";
		redirect('form_intro_disciplina');
		exit();
	}
	if(!isset($error)){
		foreach ($_POST['clase'] as $key => $value) {
			$connect = introdu_disciplinadb($_POST['nume_disciplina'],$value,$_SESSION['id_cont_prof']);
		}
		redirect('view_discipline_general');
	}
?>