<?php
	include_once "model/functii_verif_admin.php";
	if(trim($_POST['Nume_cont'])==""){
		$error = "Introdu numele de cont";
	}
	if(trim($_POST['Parola'])==""){
		$error = "Introdu parola";
	}
	if(!isset($error)){
			$id = log_in_admin($_POST['Nume_cont'],$_POST['Parola']);
			if($id!=FALSE){
				$_SESSION['nume_cont'] = $_POST['Nume_cont'];
				$_SESSION['id_cont_elev'] = $id;
				redirect('view_panou_elev');
			}else{
				$error = "Parola sau numele de utilizator incorecta";
				redirect('view_log_in');
			}
	}else{
		redirect('view_log_in');
	}
?> 