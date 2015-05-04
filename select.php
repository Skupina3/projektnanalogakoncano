<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "baza1";
	$error="";
	$select=($_POST['select']);
	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	switch ($select)
	{
		case 'User':
		{
		$sql = "SELECT Username, Password, Pravice FROM user";
		$result = $conn->query($sql);
		if ($result->num_rows > 0)
		{
		echo '<table border="1" style="width:100%">
		<tr>
		<th>Username</th> 
		<th>Password</th>		
		<th>Pravice</th>
		</tr>';
		// output data of each row
		while($row = $result->fetch_assoc())
		{
			echo "<tr><th>".$row["Username"]."</th><th>". $row["Password"]."</th><th>".$row["Pravice"]."</th></tr>";
		}
		} 		
		else 
		{
			echo "0 results";
		}
		break;
		}
	
		case 'Izvajalec':
  {
  $sql = "SELECT DavSTIzvajalec, Telefon, Naziv, Naslov, Posta, Fax, GSM, SpletnaStran, Email FROM izvajalec";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>DavSTLastnik</th> 
  <th>Telefon</th>  
  <th>Naziv</th>
<th>Naslov</th> 
<th>Posta</th> 
<th>Fax</th> 
<th>GSM</th> 
<th>SpletnaStran</th> 
<th>Email</th> 
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["DavSTIzvajalec"]."</th><th>". $row["Telefon"]."</th><th>".$row["Naziv"]."</th><th>".$row["Naslov"]."</th><th>".$row["Posta"]."</th><th>".$row["Fax"]."</th><th>".$row["GSM"]."</th><th>".$row["SpletnaStran"]."</th><th>".$row["Email"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
	break;
	}
 case 'Lastnik':
  {
  $sql = "SELECT DavStLastnik, Telefon, Naziv, Naslov, Posta, Fax, GSM, SpletnaStran, Email FROM Lastnik";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>DavSTLastnik</th> 
  <th>Telefon</th>  
  <th>Naziv</th>
<th>Naslov</th> 
<th>Posta</th> 
<th>Fax</th> 
<th>GSM</th> 
<th>SpletnaStran</th> 
<th>Email</th> 
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["DavStLastnik"]."</th><th>". $row["Telefon"]."</th><th>".$row["Naziv"]."</th><th>".$row["Naslov"]."</th><th>".$row["Posta"]."</th><th>".$row["Fax"]."</th><th>".$row["GSM"]."</th><th>".$row["SpletnaStran"]."</th><th>".$row["Email"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
    case 'Taksimeter':
  {
  $sql = "SELECT SerijskaStevTaksimeter, Proizvajalec, Tip, UradnaOznaka, ProgramskaVerzija, KontrolnaVsota, Naprava FROM Taksimeter";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>SeriskaStevTaksimeter</th> 
  <th>Proizvajalec</th>  
  <th>Tip</th>
<th>UradnaOznaka</th> 
<th>ProgramskaVerzija</th> 
<th>KontrolnaVsota</th> 
<th>Naprava</th>  
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["SerijskaStevTaksimeter"]."</th><th>". $row["Proizvajalec"]."</th><th>".$row["Tip"]."</th><th>".$row["UradnaOznaka"]."</th><th>".$row["ProgramskaVerzija"]."</th><th>".$row["KontrolnaVsota"]."</th><th>".$row["Naprava"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
    case 'Delavec':
  {
  $sql = "SELECT EMSO, Ime, Priimek, DavSTIzvajalec FROM Delavec";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>EMSO</th> 
  <th>Ime</th>  
  <th>Priimek</th>
  <th>DavSTIzvajalec</th>   
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["EMSO"]."</th><th>". $row["Ime"]."</th><th>".$row["Priimek"]."</th><th>".$row["DavSTIzvajalec"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
  case 'Vgradnjakontrola':
  {
  $sql = "SELECT StevSasije, SeriskaStev, DavStLastnik, EMSO, DavStIzvajalec,Vgradnja, VrstaPosega FROM Vgradnjakontrola";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>StevSasije</th> 
  <th>SeriskaStevTaksimeter</th> 
  <th>DavStLastnik</th>  
  <th>EMSO</th> 
  <th>DavStIzvajalca</th> 
  <th>Vgradnja</th> 
  <th>Vrsta posega</th> 
  </tr>';
  
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["StevSasije"]."</th><th>".$row["SeriskaStev"]."</th><th>". $row["DavStLastnik"]."</th>
   <th>". $row["EMSO"]."</th><th>". $row["DavStIzvajalec"]."</th><th>". $row["Vgradnja"]."</th><th>". $row["VrstaPosega"]."</th>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
case 'Tarifaavtomobil':
  {
  $sql = "SELECT IDTarife, StevSasije, DavStLastnik, Tarifa, SeriskaStev FROM Tarifaavtomobil";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>IDtarife</th> 
  <th>StevSasije</th>  
  <th>DavStLastnik</th>
  <th>Tarifa</th>  
<th>SeriskaStevTaksimeter</th> 
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["IDTarife"]."</th><th>". $row["StevSasije"]."</th><th>".$row["DavStLastnik"]."</th><th>".$row["Tarifa"]."</th><th>".$row["SeriskaStev"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
    case 'Avtomobil':
  {
  $sql = "SELECT StevSasije, Znamka, Model, Tip, RegistrskaStev, KonstantaVozilaW, PnevmatikeZadaj, PnevmatikaSpredaj, DavStLastnik, SerijskaStevTaksimeter FROM avtomobil";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>StevSasije</th> 
  <th>Znamka</th>  
  <th>Model</th>
  <th>Tip</th>  
<th>RegistrskaStev</th> 
<th>KonstantaVozilaW</th>  
<th>PnevmatikeZadaj</th> 
<th>PnevmatikeSpredaj</th> 
<th>DavSTLasnik</th>
<th>SeriskaStevTaksimeter</th>
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["StevSasije"]."</th><th>". $row["Znamka"]."</th><th>".$row["Model"]."</th><th>".$row["Tip"]."</th><th>".$row["RegistrskaStev"]."</th><th>".$row["KonstantaVozilaW"]."</th><th>".$row["PnevmatikeZadaj"]."</th><th>".$row["PnevmatikaSpredaj"]."</th><th>".$row["DavStLastnik"]."</th><th>".$row["SerijskaStevTaksimeter"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
 case 'Cenik':
  {
  $sql = "SELECT IDTarife, Startnina, Cena_km, Cakalna, ZamikVkm, CasZamika, StDodatkov, CenaDodatka FROM Cenik";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>IDTarife</th> 
  <th>Startnina</th>  
  <th>Cena_km</th>
  <th>Cakalna</th>  
	<th>ZamikvKm</th> 
  <th>CasZamika</th>  
  <th>STDodatkov</th> 
  <th>CenaDodatka</th> 
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["IDTarife"]."</th><th>". $row["Startnina"]."</th><th>".$row["Cena_km"]."</th><th>".$row["Cakalna"]."</th><th>".$row["ZamikVkm"]."</th><th>".$row["CasZamika"]."</th><th>".$row["StDodatkov"]."</th><th>".$row["CenaDodatka"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
  case 'Racun':
  {
  $sql = "SELECT Lokacija1, SeriskaStev, Lokacija2, Lokacija3, IDTarife, StevSasije, DavStLastnik FROM Racun";
  $result = $conn->query($sql);
  if ($result->num_rows > 0)
  {
  echo '<table border="1" style="width:100%">
  <tr>
  <th>Lokacija1</th> 
  <th>SerijskaStevTaksimetra</th> 
  <th>Lokacija2</th>  
  <th>Lokacija3</th>
  <th>IDTarife</th>  
<th>StevSasije</th> 
<th>DavStLastnik</th>  
  </tr>';
  // output data of each row
  while($row = $result->fetch_assoc())
  {
   echo "<tr><th>".$row["Lokacija1"]."</th><th>".$row["SeriskaStev"]."</th><th>". $row["Lokacija2"]."</th><th>".$row["Lokacija3"]."</th><th>".$row["IDTarife"]."</th><th>".$row["StevSasije"]."</th><th>".$row["DavStLastnik"]."</th></tr>";
  }
  }   
  else 
  {
   echo "0 results";
  }
  break;
  }
  
}
	$conn->close();
?>