<?php
	function introdu_note($data,$nota,$id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO note (Data_nota, Nota,ID_Disciplina,ID_Elev) VALUES (:data, :nota, :id_disciplina, id_elev)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":nota",$nota);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->bindValue(":id_elev",$id_elev);
		return $stmt->execute();
	}
	function introdu_absente($absenta,$id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO absente (Data, ID_Disciplina, ID_Elev) VALUES (:data, :id_disciplina, :id_elev)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->bindValue(":id_elev",$id_elev);
		return $stmt->execute();
	}
	function introdu_examen($titlu,$data,$descriere,$disciplina){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO examene (Data, Titlu, Descriere, ID_Disciplina) VALUES (:data, :titlu, :descriere, :id_disciplina)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":titlu",$titlu);
		$stmt->bindValue(":descriere",$descriere);
		$stmt->bindValue(":id_disciplina",$disciplina);
		return $stmt->execute();
	}
	function intro_material($continut,$id_disciplina){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO materiale (Continut, ID_Disciplina) VALUES (:continut, :id_disciplina)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":continut",$continut);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		return $stmt->execute();
	}
?>