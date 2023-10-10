<?php
	function list_orar($clasa){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM orare inner join discipline_clase on orare.ID_Disciplina = discipline_clase.ID_Disciplina WHERE discipline_clase.ID_Clasa = :clasa";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":clasa", $clasa);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_orar_prof($profesor){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM orare inner join discipline_clase on orare.ID_Disciplina = discipline_clase.ID_Disciplina inner join clase on discipline_clase.ID_Clasa = clase.ID_Clasa where discipline_clase.ID_Profesor = :profesor ORDER BY Interval_orar";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":profesor", $profesor);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_orar_prof_zi($profesor,$ziua){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM orare inner join discipline_clase on orare.ID_Disciplina = discipline_clase.ID_Disciplina inner join clase on discipline_clase.ID_Clasa = clase.ID_Clasa where discipline_clase.ID_Profesor = :profesor and orare.Ziua = :ziua ORDER BY Interval_orar";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":profesor", $profesor);
		$stmt->bindValue(":ziua", $ziua);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>