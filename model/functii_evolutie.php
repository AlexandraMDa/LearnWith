<?php
	function list_discipline_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM discipline_clase inner join conturi_elevi on discipline_clase.ID_Clasa = conturi_elevi.ID_Clasa WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_discipline($id_elev,$id_disciplina){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM note inner join discipline_clase on note.ID_Disciplina = discipline_clase.ID_Disciplina WHERE note.ID_Elev = :id_elev and note.ID_Disciplina = :id_disciplina";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id_elev",$id_elev);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function suma_note_general($id){
		
	}
?>