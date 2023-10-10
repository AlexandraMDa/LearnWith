<?php
	if(!array_key_exists('nume_cont', $_SESSION)||!array_key_exists('tip_cont',$_SESSION)||!array_key_exists('id_cont_parinte', $_SESSION)){
		redirect('view_log_in_general');
		exit();
	}
	$target_dir = "view/Surse_imag/Conturi/conturi_parinti/";
	$target_file = $target_dir . $_SESSION['id_cont_parinte'].".jpg";
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $eroare= "Fisierul nu este o imagine.";
	        $uploadOk = 0;
	    }
	}
	// Check file size
	if ($_FILES["fileToUpload"]["size"] > 500000) {
	     $eroare="Fisierul este prea mare.";
	    $uploadOk = 0;
	} 
	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	     $eroare="Doar fisierele JPG, JPEG, PNG & GIF sunt permise.";
	    $uploadOk = 0;
	}  
	if ($uploadOk == 1){
		if(!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			$uploadOk=0;
			$eroare="Eroare la incarcarea fisierului.";
		}
	}
	if ($uploadOk == 1){ 
		redirect('view_panou_parinte');
	}else{
		redirect('form_send_image_parinte');
	}
?>