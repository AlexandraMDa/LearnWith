<?php
	function edit_elevdb($id,$name,$prenume,$clasa,$dn,$cont,$parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql="UPDATE conturi_elevi SET Nume = :name, prenume = :prenume, ID_Clasa = :clasa, Data_nasterii = :dn, Nume_cont = :cont, Parola = :parola WHERE ID_Elev = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":name",$name);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":clasa",$clasa);
		$stmt->bindValue(":dn",$dn);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
		//return $row=$stmt->fetch(PDO::FETCH_ASSOC);
	}
	function edit_profdb($id,$name,$prenume,$cont,$parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "UPDATE conturi_profesori SET Nume = :name, Prenume = :prenume, Nume_cont = :cont, Parola = :parola WHERE ID_Profesor = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":name",$name);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
	function edit_parintedb($id, $nume, $prenume, $dn, $tlf, $mail, $adresa, $cont, $parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "UPDATE conturi_parinti SET Nume = :nume, Prenume= :prenume, Data_nas = :dn, Telefon = :tlf, Adresa_mail = :mail, Adresa = :adresa, Nume_cont = :cont, Parola = :parola WHERE ID_Parinte = :id";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nume",$nume);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":dn",$dn);
		$stmt->bindValue(":tlf",$tlf);
		$stmt->bindValue(":mail",$mail);
		$stmt->bindValue(":adresa",$adresa);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		$stmt->bindValue(":id",$id);
		return $stmt->execute();
	}
?>