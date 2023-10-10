<?php
	function get_data_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_elevi inner join clase on conturi_elevi.ID_Clasa = clase.ID_Clasa WHERE ID_Elev = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_data_prof($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_profesori left join discipline_clase on conturi_profesori.ID_Profesor = discipline_clase.ID_Profesor WHERE conturi_profesori.ID_Profesor = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_data_parinte($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_parinti WHERE ID_Parinte = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>