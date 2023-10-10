<?php
	include_once "model/functii_prof_introdu.php";
	if(trim($_POST['Titlu'])==""){
		$error = "Introduceți titlul testului";
	}
	if(trim($_POST['Descriere'])==""){
		$error = "Introduceți o descriere";
	}
	if(!isset($error)){
		$connect = introdu_examen($_POST['Titlu'],$_POST['Data'],$_POST['Descriere'],$_POST['Disciplina']);
		if($connect==true){
			redirect('view_panou_prof');
		}else{
			redirect('error');
		}
	}
?>