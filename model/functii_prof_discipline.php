<?php
	function list_disciplina($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT ID_Disciplina,Nume_disciplina,Nume_clasa FROM discipline_clase inner join clase on clase.ID_Clasa=discipline_clase.ID_Clasa WHERE ID_Profesor = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	
	function introdu_disciplinadb($nume,$clasa,$id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO discipline_clase (Nume_disciplina, ID_Clasa, ID_Profesor) VALUES (:nume, :clasa, :id)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->bindValue(":clasa",$clasa);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function edit_disciplina($id,$nume_nou){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "UPDATE discipline_clase SET Nume_disciplina = :nume_nou WHERE ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nume_nou",$nume_nou);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function sterge_disciplina($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "DELETE FROM absente WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM note WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM concursuri WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM examene WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM materiale WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM orare WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$sql = "DELETE FROM discipline_clase WHERE discipline_clase.ID_Disciplina = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function info_disciplina($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT ID_Disciplina,Nume_disciplina FROM discipline_clase WHERE ID_Disciplina = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>