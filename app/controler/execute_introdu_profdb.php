<?php
	include_once "model/functii_introdu_conturi.php";
	include_once "model/functii_log_in.php";
	if(trim($_POST['Nume'])==""){
		$error = "Introduceți numele";
	}
	if(trim($_POST['Prenume'])==""){
		$error = "Introduceți prenumele";
	}
	if(trim($_POST['Nume_cont'])==""){
		$error = "Introduceți numele de cont";
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
		$_SESSION['tip_cont'] = "profesor";
		$connect = introdu_profdb($_POST['Nume'],$_POST['Prenume'],$_POST['Grad'],$_POST['Nume_cont'],password_hash($_POST['Parola'],PASSWORD_BCRYPT));
		if($connect == TRUE){
			$id = log_in_profesor($_POST['Nume_cont'],$_POST['Parola']);
			$_SESSION['id_cont_prof'] = $id;
			redirect('view_panou_prof');
		} else {
			redirect('error');
		}
	}else{
		redirect('view_sign_prof');
	}
?>