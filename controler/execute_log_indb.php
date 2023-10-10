<?php
	include_once "model/functii_log_in.php";
	if(trim($_POST['Nume_cont'])==""){
		$error = "Introdu numele de cont";
	}
	if(trim($_POST['Parola'])==""){
		$error = "Introdu parola";
	}
	$select_option = $_POST['cal'];
	if(!isset($error)){
		if($select_option=='elev'){
			$id = log_in_elev($_POST['Nume_cont'],$_POST['Parola']);
			if($id!=FALSE){
				$_SESSION['nume_cont'] = $_POST['Nume_cont'];
				$_SESSION['tip_cont'] = "elev";
				$_SESSION['id_cont_elev'] = $id;
				redirect('view_panou_elev');
			}else{
				$error = "Parola sau numele de utilizator incorecta";
				redirect('view_log_in_general');
			}
		}
		if($select_option=='profesor'){
			$id = log_in_profesor($_POST['Nume_cont'],$_POST['Parola']);
			if($id!=FALSE){
				$_SESSION['nume_cont'] = $_POST['Nume_cont'];
				$_SESSION['tip_cont'] = "profesor";
				$_SESSION['id_cont_prof'] = $id;
				redirect('view_panou_prof');
			}else{
				$error = "Parola sau numele de utilizator incorecta";
				redirect('view_log_in_general');
			}
		}
		if($select_option=='parinte'){
			$id = log_in_parinte($_POST['Nume_cont'],$_POST['Parola']);
			if($id!=FALSE){
				$_SESSION['nume_cont'] = $_POST['Nume_cont'];
				$_SESSION['tip_cont'] = "parinte";
				$_SESSION['id_cont_parinte'] = $id;
				redirect('view_panou_parinte');
			}else{
				$error = "Parola sau numele de utilizator incorecta";
				redirect('view_log_in_general');
			}
		}
	}else{
		redirect('view_log_in_general');
	}
?> 