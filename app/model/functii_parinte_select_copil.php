<?php
	function selecteaza_copil($cod){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT ID_Elev FROM conturi_elevi WHERE Cod_elev = :cod";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":cod",$cod);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function introdu_parinte_copil($id_copil,$id_parinte){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO copii_parinti (ID_Copil, ID_Parinte)
		VALUES (:id_copil, :id_parinte)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id_copil",$id_copil);
		$stmt->bindValue(":id_parinte",$id_parinte);
		return $stmt->execute();

	}
	function copii($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT ID_Copil FROM copii_parinti WHERE ID_Parinte = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	/*function selecteaza_parinte_copil($id_copil,$id_parinte){
		global $servername, $username, $password, $dbname;
		//Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		//Check connection
		if($conn->connect_error){
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT ID_Copil, ID_Parinte  FROM copii_parinti WHERE ID_Copil = '".$id_copil."' AND ID_Parinte = '".$id_parinte."'";
		$stmt = $conn->prepare($sql);
		$stmt->execute();
		$result = $stmt->get_result();
		if($result->num_rows == 0){
			return FALSE;
		}
		$user = $result->fetch_object();
		return  $user;
	}*/
?>