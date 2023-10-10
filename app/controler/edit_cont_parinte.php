<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}	
	include_once "model/functii_edit_conturi.php";
	if(trim($_POST['Nume'])==""){
		$error = "Introduceți numele";
	}
	if(trim($_POST['Prenume'])==""){
		$error = "Introduceți prenume";
	}
	if(trim($_POST['Telefon'])==""){
		$error = "Introduceți numărul de telefon";
	}
	if(trim($_POST['Mail'])==""){
		$error = "Introduceți adresa de mail";
	}
	if(trim($_POST['Adresa'])==""){
		$error = "Introduceți adresa";
	}
	if(trim($_POST['Nume_cont'])==""){
		$error = "Introduceți numele contului";
	}
	if(trim($_POST['Parola'])==""){
		$error = "Introduceți parola";
	}
	if(trim($_POST['Reconfirma_parola'])==""){
		$error = "Reintroduceți parola";
	}
	if($_POST['Parola']!=$_POST['Reconfirma_parola']){
		$error = "Introduceţi 2 parole identice";
	}
	if(!isset($error)){
		$connect = edit_parintedb($_SESSION['id_cont_parinte'],$_POST['Nume'],$_POST['Prenume'],$_POST['Data_nasterii'],$_POST['Telefon'],$_POST['Mail'],$_POST['Adresa'],$_POST['Nume_cont'],password_hash($_POST['Parola'],PASSWORD_BCRYPT));
		if($connect == TRUE){
		 	redirect('view_panou_parinte');
		}else{
		 	redirect('error');
		}
	}else{
		redirect('view_edit_cont_parinte');
	}
?>