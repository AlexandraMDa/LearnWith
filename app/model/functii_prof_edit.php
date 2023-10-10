<?php
	function edit_note($data_nota,$nota,$id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="UPDATE note SET Data_nota = :data_nota, Nota = :nota 
		WHERE ID_Elev = :id_elev and ID_Disciplina = :id_disciplina";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data_nota",$data_nota);
		$stmt->bindValue(":id_elev",$id_elev);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		return $stmt->execute();
	}
	function edit_absente($data,$id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="UPDATE absente SET Data = :data_nota WHERE ID_Elev = :id_elev and ID_Disciplina = :id_disciplina";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":data_nota",$data_nota);
		$stmt->bindValue(":id_elev",$id_elev);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		return $stmt->execute();
	}
?>