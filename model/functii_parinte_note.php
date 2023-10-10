<?php
	function list_note_parinte($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina,Nume,Prenume FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina inner join conturi_elevi on note.ID_Elev=conturi_elevi.ID_Elev inner join copii_parinti on note.ID_Elev=copii_parinti.ID_Copil WHERE ID_Parinte = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetch(PDO::FETCH_ASSOC); 
		return $result;
	}
?>