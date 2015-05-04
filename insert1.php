<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "baza1";
	$error="";
	$insert=($_POST['insert']);
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}

	switch ($insert)
	{
		case 'User':
		{
			$user=$_POST['username'];
			$password=$_POST['password'];
			$pravice=$_POST['pravice'];
			$sql = "INSERT into user (Username, Password, Pravice)
			VALUES ('$user','$password' ,'$pravice' )";
			break;
		}
		case 'Lastnik':
		{
			$Dav=$_POST['DavSt'];
			$Tel=$_POST['Telefon'];
			$Naz=$_POST['Naziv'];
			$Nas=$_POST['Naslov'];
			$Pos=$_POST['Posta'];
			$Fax=$_POST['Fax'];
			$GSM=$_POST['GSM'];
			$SpS=$_POST['SpleSt'];
			$mail=$_POST['email'];
			$sql = "insert into lastnik (DavStLastnik, Telefon, Naziv, Naslov, Posta, Fax, GSM, SpletnaStran, Email)
			values ($Dav,$Tel,'$Naz','$Nas','$Pos',$Fax,$GSM,'$SpS','$mail')";
			break;
		}
		case 'Izvajalec':
		{
			$Dav=$_POST['DavSt'];
			$Tel=$_POST['Telefon'];
			$Naz=$_POST['Naziv'];
			$Nas=$_POST['Naslov'];
			$Pos=$_POST['Posta'];
			$Fax=$_POST['Fax'];
			$GSM=$_POST['GSM'];
			$SpS=$_POST['SpleSt'];
			$mail=$_POST['email'];
			$sql = "insert into izvajalec (DavStIzvajalec, Telefon, Naziv, Naslov, Posta, Fax, GSM, SpletnaStran, Email)
			values ($Dav,$Tel,'$Naz','$Nas','$Pos',$Fax,$GSM,'$SpS','$mail')";
			break;
		}
		case 'Avto':
		{
		$StevSasije=$_POST['StevSasije'];
		$Znamka=$_POST['Znamka'];	
		$Model=$_POST['Model'];
		$Tip=$_POST['Tip'];
		$Registrska=$_POST['RegistrskaStev'];
		$KonstantaVozilaW=$_POST['KonstantaVozilaW'];
		$PnevmatikeZadaj=$_POST['PnevmatikeZadaj'];
		$PnevmatikeSpredaj=$_POST['PnevmatikeSpredaj'];
		$DavStLastnik=$_POST['DavStLastnik'];
		$SerijskaStevTaksimeter=$_POST['SerijskaStevTaksimeter'];
		$Registrska=$_POST['RegistrskaStev'];
		$KonstantaVozilaW=$_POST['KonstantaVozilaW'];
		$sql = "insert into avtomobil (StevSasije, Znamka, Model, Tip, RegistrskaStev,KonstantaVozilaW, PnevmatikeZadaj,PnevmatikaSpredaj, DavStLastnik,SerijskaStevTaksimeter) 
		values($StevSasije,'$Znamka','$Model','$Tip','$Registrska','$KonstantaVozilaW','$PnevmatikeZadaj','$PnevmatikeSpredaj',$DavStLastnik,'$SerijskaStevTaksimeter')"; 
		break;
		}
		case 'Cenik':
		{
		$IDTarife=$_POST['IDTarife'];
		$Startnina=$_POST['Startnina'];
		$Cena_km=$_POST['Cena_km'];
		$Cakalna=$_POST['Cakalna'];
		$ZamikVkm=$_POST['ZamikVkm'];
		$CasZamika=$_POST['CasZamika'];
		$StDodatkov=$_POST['StDodatkov'];
		$CenaDodatka=$_POST['CenaDodatka'];
		$sql = " insert into Cenik (IDTarife, Startnina, Cena_km, Cakalna, ZamikVkm, CasZamika, StDodatkov, CenaDodatka)
		values('$IDTarife ','$Startnina ','$Cena_km ','$Cakalna ','$ZamikVkm ','$CasZamika ','$StDodatkov ','$CenaDodatka ')";
		break;
		}
		case 'Delavec':
		{
		$EMSO=$_POST['EMSO'];
		$Ime=$_POST['Ime'];
		$Priimek=$_POST['Priimek'];
		$DavStIzvajalec=$_POST['DavStIzvajalec'];
		$sql = " insert into delavec  (EMSO, Ime, Priimek, DavStIzvajalec)
		values('$EMSO','$Ime','$Priimek','$DavStIzvajalec')"; 
		break;
		}
		case 'Racun':
		{
		$Lokacija1=$_POST['Lokacija1'];
		$SerijskaStev=$_POST['SerijskaStev'];
		$Lokacija2=$_POST['Lokacija2'];
		$Lokacija3=$_POST['Lokacija3'];
		$IDTarife=$_POST['IDTarife'];
		$StevSasije=$_POST['StevSasije'];
		$DavStLastnik=$_POST['DavStLastnik'];
		$sql = " insert into Racun (Lokacija1, SeriskaStev, Lokacija2, Lokacija3, IDTarife, StevSasije, DavStLastnik)
		values ('$Lokacija1','$SerijskaStev','$Lokacija2','$Lokacija3','$IDTarife','$StevSasije','$DavStLastnik')";
		break;
		}
		case 'Taksimeter':
		{
			$SST=$_POST['SerTaMe'];
			$Proiz=$_POST['Proiz'];
			$Tip=$_POST['Tip'];
			$Oznaka=$_POST['Oznaka'];
			$Verzija=$_POST['Verz'];
			$Kon=$_POST['Kon'];
			$Nap=$_POST['Nap'];
			$sql = "insert into taksimeter (SerijskaStevTaksimeter, Proizvajalec, Tip, UradnaOznaka,ProgramskaVerzija,KontrolnaVsota,Naprava) 
			values ('$SST','$Proiz','$Tip','$Oznaka','$Verzija',$Kon,$Nap)";
			break;
		}
		case 'Tarifa':
		{
			$IDTar=$_POST['Tar'];
			$StevSas=$_POST['StevSas'];
			$DDL=$_POST['DavLas'];
			$SST=$_POST['SerTaMe'];
			$Tarifa=$_POST['Tarifa'];
			$sql = "INSERT INTO TarifaAvtomobil(IDTarife, StevSasije, DavStLastnik, Tarifa, SeriskaStev) values($IDTar,'$StevSas',$DDL,'$Tarifa', '$SST')";
			break;
		}
		case 'Vgradnja':
		{
			$Sas=$_POST['StevSas'];
			$SST=$_POST['SerTaMe'];
			$DSL=$_POST['DavLas'];
			$DSI=$_POST['DavIz'];
			$EMSO=$_POST['EMSO'];
			$Vgradnja=$_POST['Vgra'];
			$Vrstaposega=$_POST['Pos'];
			$sql = "insert into VgradnjaKontrola (StevSasije, SeriskaStev, DavStLastnik, EMSO, DavStIzvajalec, Vgradnja, Vrstaposega)
			values ('$Sas','$SST',$DSL,$DSI,$EMSO,$Vgradnja,'$Vrstaposega')";
			break;
		}
	}
	
	if ($conn->query($sql) === TRUE)
	{
    echo "New record created successfully";
	} 
	else 
	{
    echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>

<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="User">
	<input type="submit" value=" New User "/><br />
</form>

<form action="interface.php" method="post">
	<input type="submit" value=" Back "/><br />
</form>
