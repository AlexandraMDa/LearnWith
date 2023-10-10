<?php
	function total_absente($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return count($result);
	}
	function list_absente($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT distinct Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$data=array();
		$discipline=$stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($discipline as $key => $value) {
			$sql = "SELECT Data,Nume_disciplina,Motivat FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Nume_disciplina=:numeD";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":numeD",$value["Nume_disciplina"]);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function total_absente_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente inner join discipline_clase on absente.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function total_absente_elev_noi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente inner join discipline_clase on absente.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data DESC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function total_absente_elev_vechi($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente inner join discipline_clase on absente.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function total_absente_elev_motivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente inner join discipline_clase on absente.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = :motiv ORDER BY Data ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->bindValue(":motiv","DA");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function total_absente_elev_nemotivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT *  FROM absente inner join discipline_clase on absente.ID_Disciplina = discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = :motiv ORDER BY Data ASC";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->bindValue(":motiv","NU");
		$stmt->execute();
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function absente_pe_luni($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$data=array();
		for($i=9;$i<=12;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		for($i=1;$i<=8;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function nr_absente_discipline($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT distinct Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id ORDER BY Data";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$data=array();
		$discipline=$stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($discipline as $key => $value) {
			$sql = "SELECT count(*) as nr, Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Nume_disciplina=:numeD group by Nume_disciplina";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":numeD",$value["Nume_disciplina"]);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function absente_pe_luni_motivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$data=array();
		for($i=9;$i<=12;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and Motivat='DA' and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		for($i=1;$i<=8;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and Motivat='DA'and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function absente_pe_discipline_motivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT distinct Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = 'DA' ORDER BY Data";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$data=array();
		$discipline=$stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($discipline as $key => $value) {
			$sql = "SELECT count(*) as nr, Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = 'DA' and Nume_disciplina=:numeD group by Nume_disciplina";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":numeD",$value["Nume_disciplina"]);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function absente_pe_luni_nemotivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$data=array();
		for($i=9;$i<=12;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and Motivat='NU' and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		for($i=1;$i<=8;$i++){
			$sql = "SELECT count(*) as nr FROM absente where ID_Elev=:id and Motivat='NU'and month(Data)=:luna";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":luna",$i);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
	function absente_pe_discipline_nemotivate($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT distinct Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = 'NU' ORDER BY Data";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$data=array();
		$discipline=$stmt->fetchAll(PDO::FETCH_ASSOC);
		foreach ($discipline as $key => $value) {
			$sql = "SELECT count(*) as nr, Nume_disciplina FROM absente inner join discipline_clase on absente.ID_Disciplina=discipline_clase.ID_Disciplina WHERE ID_Elev = :id and Motivat = 'NU' and Nume_disciplina=:numeD group by Nume_disciplina";
			$stmt=$conn->prepare($sql);
			$stmt->bindValue(":id",$id);
			$stmt->bindValue(":numeD",$value["Nume_disciplina"]);
			$stmt->execute();
			array_push($data, $stmt->fetchAll(PDO::FETCH_ASSOC));
		}
		return $data;
	}
?>