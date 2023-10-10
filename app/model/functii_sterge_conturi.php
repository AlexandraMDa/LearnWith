<?php
	function sterge_cont_elev($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "DELETE FROM conturi_elevi WHERE ID_Elev= :id";
		$sql = "DELETE FROM absente WHERE ID_Elev= :id";
		$sql = "DELETE FROM concursuri WHERE ID_Elev= :id";
		$sql = "DELETE FROM copii_parinti WHERE ID_Elev= :id";
		$sql = "DELETE FROM note WHERE ID_Elev= :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function sterge_cont_prof($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "DELETE FROM conturi_profesori WHERE ID_Profesor= :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function sterge_cont_parinte($id){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "DELETE FROM conturi_parinti WHERE ID_Parinte= :id";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
?>