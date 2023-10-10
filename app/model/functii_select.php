<?php
	function select_clase_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM clase inner join conturi_elevi on clase.ID_Clasa = conturi_elevi.ID_Clasa WHERE ID_Elev = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_discipline($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT DISTINCT * FROM discipline_clase inner join clase on discipline_clase.ID_Clasa = clase.ID_Clasa WHERE discipline_clase.ID_Profesor = :id ORDER BY Nume_disciplina";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_elevi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM conturi_elevi inner join note on conturi_elevi.ID_Elev = note.ID_Elev inner join absente on conturi_elevi.ID_Elev=absente.ID_Elev WHERE conturi_elevi.ID_Clasa = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function select_clase(){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM clase";
		$stmt=$conn->prepare($query);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function select_clase_profi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM discipline_clase inner join clase on discipline_clase.ID_Clasa = clase.ID_Clasa WHERE discipline_clase.ID_Profesor = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function select_discipline($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM discipline_clase inner join conturi_elevi on discipline_clase.ID_Clasa = conturi_elevi.ID_Clasa WHERE ID_Elev = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_discipline($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM discipline_clase WHERE ID_Disciplina = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_copii_parinte($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM copii_parinti inner join conturi_elevi on copii_parinti.ID_Copil = conturi_elevi.ID_Elev WHERE ID_Parinte = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function get_copil($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM conturi_elevi  WHERE ID_Elev = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function select_materiale($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM materiale inner join discipline_clase on materiale.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Clasa = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function select_text($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT Continut FROM materiale WHERE ID_Material = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_materiale($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM materiale inner join discipline_clase on materiale.ID_Disciplina = discipline_clase.ID_Disciplina WHERE materiale.ID_Disciplina = :id";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_discipline_materiale($id_prof,$id_disciplina){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT DISTINCT * FROM discipline_clase inner join clase on discipline_clase.ID_Clasa = clase.ID_Clasa inner join materiale on discipline_clase.ID_Disciplina = materiale.ID_Disciplina WHERE discipline_clase.ID_Profesor = :id_prof and discipline_clase.ID_Disciplina = :id_disciplina ORDER BY Nume_disciplina";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id_prof",$id_prof);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_elevi_clasa($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM clase inner join conturi_elevi on clase.ID_Clasa = conturi_elevi.ID_Clasa WHERE conturi_elevi.ID_Clasa = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_clase_discipline($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM clase inner join discipline_clase on clase.ID_Clasa = discipline_clase.ID_Clasa WHERE discipline_clase.ID_Disciplina = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_discipline_note($id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM note WHERE note.ID_Disciplina = :id_disciplina and note.ID_Elev = :id_elev";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->bindValue(":id_elev",$id_elev);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function data_nota($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM note WHERE ID_Nota = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function list_discipline_absente($id_disciplina,$id_elev){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM absente WHERE absente.ID_Disciplina = :id_disciplina and absente.ID_Elev = :id_elev";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id_disciplina",$id_disciplina);
		$stmt->bindValue(":id_elev",$id_elev);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function data_absenta($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT * FROM absente WHERE ID_Absenta = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
?>