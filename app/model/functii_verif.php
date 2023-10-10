<?php
	function log_in_elev($nume,$parola){	
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_elevi WHERE Nume_cont ='".$nume."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		if(password_verify($parola,$user->Parola)){
			return $user->ID_Elev;
		}
		return FALSE;
	}
	function log_in_profesor($nume,$parola){	
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_profesori WHERE Nume_cont ='".$nume."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		if(password_verify($parola,$user->Parola)){
			return $user->ID_Profesor;
		}
		return FALSE;
	}
	function log_in_parinte($nume,$parola){	
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_parinti WHERE Nume_cont ='".$nume."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		if(password_verify($parola,$user->Parola)){
			return $user->ID_Parinte;
		}
		return FALSE;
	}
	function get_data_elev($id){
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_elevi WHERE ID_Elev ='".$id."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		return  $user;
	}
	function get_data_prof($id){
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_profesori WHERE ID_Profesor ='".$id."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		return  $user;
	}
	function get_data_parinte($id){
		global $servername, $username, $password, $dbname;
		// Create connection
		//$parola=password_hash($parola,PASSWORD_BCRYPT);
		$conn = new mysqli($servername, $username, $password, $dbname);
		$stmt = $conn->prepare("SELECT * FROM conturi_parinti WHERE ID_Parinte ='".$id."'");
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		return  $user;
	}
?>