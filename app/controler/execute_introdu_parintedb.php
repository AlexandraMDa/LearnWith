<?php
	include_once "model/functii_introdu_conturi.php";
	include_once "model/functii_log_in.php";
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
		$_SESSION['nume_cont'] = $_POST['Nume_cont'];
		$_SESSION['tip_cont'] = "parinte";
		$connect = introdu_parintedb($_POST['Nume'],$_POST['Prenume'],$_POST['Data_nasterii'],$_POST['Telefon'],$_POST['Mail'],$_POST['Adresa'],$_POST['Nume_cont'],password_hash($_POST['Parola'],PASSWORD_BCRYPT));
		if($connect != FALSE){
			$id = log_in_parinte($_POST['Nume_cont'],$_POST['Parola']);
			$_SESSION['id_cont_parinte'] = $id;
			redirect('view_panou_parinte');
		} else{
			redirect('error');
		}
	}else{
		redirect('view_sign_parinte');
	}
?>