<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_prof', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	include_once "model/functii_edit_conturi.php";
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
	/*if(!isset($error)){
		$connect = edit_profdb($_SESSION['id_cont_prof'],$_POST['Nume'],$_POST['Prenume'],$_POST['Nume_cont'],password_hash($_POST['Parola'],PASSWORD_BCRYPT));
		/*if($connect == TRUE){
			//echo $_SESSION['id_cont_prof'];
			//redirect('view_panou_prof');
		} else {
			redirect('error');
		}
		echo "Yeeeey";
	}else{
		redirect('view_edit_cont_prof');
		echo "No";
	}*/
?>