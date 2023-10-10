<?php
	function list_chat($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM chat WHERE ID_Disciplina = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_date_profesor($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_profesori WHERE ID_Profesor = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_date_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_elevi WHERE ID_Elev = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>