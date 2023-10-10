<?php
	function list_examene($clasa){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM examene inner join discipline_clase on examene.ID_Disciplina = discipline_clase.ID_Disciplina WHERE discipline_clase.ID_Clasa = :clasa ORDER BY Data ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":clasa", $clasa);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_clase_discipline_1($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM clase inner join discipline_clase on clase.ID_Clasa = discipline_clase.ID_Clasa WHERE discipline_clase.ID_Profesor = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id", $id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>