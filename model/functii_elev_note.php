<?php
	function list_note($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT distinct Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$data=array();
		$discipline=$stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($discipline as $key => $value) {
			$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Nume_disciplina=:numeD ORDER BY Data_nota";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":numeD",$value["Nume_disciplina"]);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function media_generala($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Nota FROM note WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		$numar = count($result);
		$suma = 0;
		foreach($result as $row){
			$suma = $suma + $row['Nota'];
		}
		if($numar>0) return $suma/$numar;
		else return -1;
	}
	function rezultate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM concursuri inner join discipline_clase on concursuri.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_filtrate($id,$nr){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		if($nr>4){
			$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Nota >= :numar";
		} else{
			$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Nota < :numar";
		}
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		if($nr>4){
			$stmt->bindValue(":numar",$nr);
		}else{
			$stmt->bindValue(":numar",5);
		}
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_general($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_ordonate_noi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data_nota DESC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_ordonate_vechi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data_nota ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_ordonate_cresc($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Nota ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_ordonate_descresc($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Data_nota,Nota,Nume_disciplina FROM note inner join discipline_clase on note.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Nota DESC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
	function list_note_clasa($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT conturi_elevi.ID_Elev,CONCAT(Nume,' ',Prenume) as Nume, Data_nota, Nota  FROM conturi_elevi left join note on note.ID_Elev=conturi_elevi.ID_Elev WHERE note.ID_Disciplina = 27 ORDER BY Nume ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
?>