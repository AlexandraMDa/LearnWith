<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_prof_introdu.php";
	if(trim($_POST['nota'])==""){
		$error = "Introduceți nota";
	}
	if(!isset($error)){
		$connect = introdu_note($_POST['nota'],$_POST['data_nota'],1,2);
		if($connect==TRUE){
			$connect_1=introdu_absente($_POST['data_absenta']);
			if($connect_1==TRUE){
				redirect('view_panou_clasa');
			}else{
				redirect('error');
			}
		} else{
			redirect('error');
		}
	}else{
		redirect('view_panou_clasa');
	}
?>