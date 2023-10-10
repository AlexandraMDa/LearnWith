<?php
	function log_in_elev($nume,$parola){	
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_elevi WHERE Nume_cont = :nume";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		if(count($result) == 0){
			return FALSE;
		}
		if(password_verify($parola,$result[0]['Parola'])){
			return $result[0]['ID_Elev'];
		}
		return FALSE;
	}
	function log_in_profesor($nume,$parola){		
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_profesori WHERE Nume_cont = :nume";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(count($result)==0){
			return FALSE; /*aici*/
		}
		if(password_verify($parola,$result[0]['Parola'])){
			return $result[0]['ID_Profesor'];
		}
		return FALSE;
	}
	function log_in_parinte($nume,$parola){		
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_parinti WHERE Nume_cont = :nume";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		if(count($result)==0){
			return FALSE;
		}
		if(password_verify($parola,$result[0]['Parola'])){
			return $result[0]['ID_Parinte'];
		}
		return FALSE;
	}
?>