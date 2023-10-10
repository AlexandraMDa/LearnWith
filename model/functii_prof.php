<?php
	function edit_note($nota,$data,$id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="UPDATE note SET Nota = :nota, Data_nota = :data WHERE ID_Nota = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nota",$nota);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function sterge_notadb($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="DELETE FROM note WHERE ID_Nota = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function introdu_nota($id_e,$id_d,$data,$nota){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO note (Data_nota, Nota, ID_Elev, ID_Disciplina) VALUES (:data,:nota,:id_e,:id_d)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":nota",$nota);
		$stmt->bindValue(":id_e",$id_e);
		$stmt->bindValue(":id_d",$id_d);
		return $stmt->execute();
	}
	function edit_absente($motivat,$data,$id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="UPDATE absente SET Motivat = :motivat, Data = :data WHERE ID_Absenta = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":motivat",$motivat);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function introdu_absenta($id_e,$id_d,$data,$motivat){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO absente (Data, Motivat, ID_Elev, ID_Disciplina) VALUES (:data,:motivat,:id_e,:id_d)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data",$data);
		$stmt->bindValue(":motivat",$motivat);
		$stmt->bindValue(":id_e",$id_e);
		$stmt->bindValue(":id_d",$id_d);
		return $stmt->execute();
	}
	function sterge_absentadb($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="DELETE FROM absente WHERE ID_Absenta = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
?>