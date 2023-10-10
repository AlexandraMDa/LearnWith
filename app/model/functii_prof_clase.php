<?php
	function list_clase_tabel($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "SELECT Nume_clasa,Profil,Specializare, Nume, Prenume FROM clase inner join conturi_profesori on clase.ID_Diriginte=conturi_profesori.ID_Profesor WHERE ID_Profesor = :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		$stmt->execute();
		$result=$stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	function edit_clasa($id,$den){
		global $servername, $username, $password, $dbname;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error); 
		}
		$sql = "UPDATE clase SET Nume_clasa = '".$den."' WHERE ID_Profesor = '".$id."'";

		return $conn->query($sql);
	}
	function sterge_clasadb($id_clasa,$id_prof){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "DELETE FROM discipline_clase WHERE ID_Clasa = :id_clasa AND ID_Profesor = :id_prof";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id_clasa",$id_clasa);
		$stmt->bindValue(":id_prof",$id_prof);
		return $stmt->execute();
	}
	function introdu_clasadb($nume,$disciplina,$id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO discipline_clase (ID_Clasa, Nume_discipline, ID_Profesor) VALUES (:nume,:disc,:id)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->bindValue(":disc",$disciplina);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function introdu_nota($dn,$nota,$id_dis,$id_elev){
		global $servername, $username, $password, $dbname;
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error); 
		}
		$sql = "INSERT INTO note (Data_nota, Nota, ID_Disciplina, ID_Elev)
		VALUES ('".$dn."', '".$nota."', '".$id_dis."', '".$id_elev."')";

		return $conn->query($sql);
	}
?>