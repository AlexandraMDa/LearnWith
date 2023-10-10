<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_clase.php";
	introdu_nota($_POST['Data_nota'],$_POST['Nota'],$_POST['Disciplina'],$_POST['elev']);
	redirect('view_panou_prof');
?>