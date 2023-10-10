<?php
	#use PDO;
	function afis(){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$query="SELECT * FROM conturi_elevi where Nume= :Nume";
		$stmt=$conn->prepare($query);
		$stmt->bindValue(":Nume","Popescu");
		$stmt->execute();
		while($row=$stmt->fetch(PDO::FETCH_ASSOC)){
			echo $row["Nume"]." - ".$row["Prenume"]."<br>/n";
		}
	}
 ?>