<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof.php";
	$connect = sterge_notadb($_GET['id']);
	if($connect==TRUE){
		redirect('view_clase_general');
	}else{
		redirect('error');
	}
?>