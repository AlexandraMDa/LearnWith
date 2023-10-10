<?php
	function introdu_elevdb($name,$prenume,$clasa,$dn,$cont,$parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$rand = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
		$sql = "INSERT INTO conturi_elevi (Nume, Prenume, ID_Clasa, Data_nasterii, Nume_cont, Parola, Cod_elev)
		VALUES (:nume, :prenume, :clasa, :dn , :cont, :parola, :rand)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nume",$name);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":clasa",$clasa);
		$stmt->bindValue(":dn",$dn);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		$stmt->bindValue(":rand",$rand);
		return $stmt->execute();
		 
	}
	function introdu_profdb($name,$prenume,$grad,$cont,$parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO conturi_profesori (Nume, Prenume, Grad, Nume_cont, Parola)
		VALUES (:nume, :prenume, :grad, :cont, :parola)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nume",$name);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":grad",$grad);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		//return $row=$stmt->fetch(PDO::FETCH_ASSOC);
		return $stmt->execute();
 
	}
	function introdu_parintedb($name,$prenume,$dn,$tlf,$mail,$adresa,$cont,$parola){
		global $DBConfig;
		$conn=new PDO("mysql:host=".$DBConfig['SERVER']."; dbname=".$DBConfig['DB_SITE'],$DBConfig['USER'],$DBConfig['PASSWORD']);
		$sql = "INSERT INTO conturi_parinti (Nume, Prenume, Data_nas, Telefon, Adresa_mail, Adresa,  Nume_cont, Parola)
		VALUES (:nume, :prenume, :dn, :tlf, :mail, :adresa, :cont, :parola)";
		$stmt=$conn->prepare($sql);
		$stmt->bindValue(":nume",$name);
		$stmt->bindValue(":prenume",$prenume);
		$stmt->bindValue(":dn",$dn);
		$stmt->bindValue(":tlf",$tlf);
		$stmt->bindValue(":mail",$mail);
		$stmt->bindValue(":adresa",$adresa);
		$stmt->bindValue(":cont",$cont);
		$stmt->bindValue(":parola",$parola);
		return $stmt->execute();
		//return $row=$stmt->fetch(PDO::FETCH_ASSOC);
	}


	
	function introdu_admindb($name,$prenume,$mail,$cont,$parola){
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error); 
		}
		$sql = "INSERT INTO conturi_admin (Nume, Prenume, Email_scoala, Nume_cont, Parola)
		VALUES ('".$name."', '".$prenume."', '".$mail."', '".$cont."', '".$parola."')";

		if ($conn->query($sql) === TRUE) {
		    header("Location: /../platforma/index.html");
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();  
	}
?>