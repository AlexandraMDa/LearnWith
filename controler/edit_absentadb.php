<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof.php";
	if(!isset($error)){
		$connect = edit_absente($_POST['motivat'],$_POST['data'],$_POST['id_absenta']);
		if($connect==TRUE){
				redirect('view_discipline_general');
		} else{
			redirect('error');
		}
	}else{
		redirect('view_panou_clasa');
	}
?>