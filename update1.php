<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza1";
$error="";
$update=($_POST['update']);
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
die("Connection failed: " . mysqli_connect_error());
}
switch ($update)
{
case 'User':
{
$user=$_POST['username'];
$user1=$_POST['username1'];
$password=$_POST['password'];
$pravice=$_POST['pravice'];
$sql = "update user set Username='$user1', Password='$password', Pravice='$pravice' where Username='$user'";
break;
}
case 'Lastnik':
{
$Dav=$_POST['DavSt'];
$Dav1=$_POST['DavSt1'];
$Tel=$_POST['Telefon'];
$Naz=$_POST['Naziv'];
$Nas=$_POST['Naslov'];
$Pos=$_POST['Posta'];
$Fax=$_POST['Fax'];
$GSM=$_POST['GSM'];
$SpS=$_POST['SpleSt'];
$mail=$_POST['email'];
$sql = "update lastnik set DavStLastnik=$Dav1, Telefon=$Tel, Naziv='$Naz', Naslov='$Nas', Posta='$Pos', Fax=$Fax, GSM=$GSM, SpletnaStran='$SpS', Email='$mail' where DavStLastnik=$Dav";
break;
}
case 'Izvajalec':
{
$Dav=$_POST['DavSt'];
$Dav1=$_POST['DavSt1'];
$Tel=$_POST['Telefon'];
$Naz=$_POST['Naziv'];
$Nas=$_POST['Naslov'];
$Pos=$_POST['Posta'];
$Fax=$_POST['Fax'];
$GSM=$_POST['GSM'];
$SpS=$_POST['SpleSt'];
$mail=$_POST['email'];
$sql = "update Izvajalec set DavStIzvajalec=$Dav1, Telefon=$Tel, Naziv='$Naz', Naslov='$Nas', Posta='$Pos', Fax=$Fax, GSM=$GSM, SpletnaStran='$SpS', Email='$mail' where DavStIzvajalec=$Dav";
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
$sql = "update avtomobil set Znamka='$Znamka', Model='$Model', Tip='$Tip', RegistrskaStev='$Registrska',KonstantaVozilaW='$KonstantaVozilaW', PnevmatikeZadaj='$PnevmatikeZadaj',PnevmatikaSpredaj='$PnevmatikeSpredaj', DavStLastnik=$DavStLastnik,SerijskaStevTaksimeter='$SerijskaStevTaksimeter' where StevSasije=$StevSasije";
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
$sql = " update Cenik set Startnina='$Startnina ', Cena_km='$Cena_km ', Cakalna='$Cakalna ', ZamikVkm='$ZamikVkm ', CasZamika='$CasZamika ', StDodatkov='$StDodatkov ', CenaDodatka='$CenaDodatka ' where IDTarife='$IDTarife'";
break;
}
case 'Delavec':
{
$EMSO=$_POST['EMSO'];
$Ime=$_POST['Ime'];
$Priimek=$_POST['Priimek'];
$DavStIzvajalec=$_POST['DavStIzvajalec'];
$sql = " update delavec set Ime='$Ime', Priimek='$Priimek', DavStIzvajalec='$DavStIzvajalec' where  EMSO='$EMSO'";
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
$sql = " update Racun set Lokacija1='$Lokacija1', SeriskaStev='$SerijskaStev', Lokacija2='$Lokacija2', Lokacija3='$Lokacija3', IDTarife='$IDTarife', StevSasije='$StevSasije', DavStLastnik='$DavStLastnik'";
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
$sql = "update taksimeter set SerijskaStevTaksimeter='$SST', Proizvajalec='$Proiz', Tip='$Tip', UradnaOznaka='$Oznaka',ProgramskaVerzija='$Verzija',KontrolnaVsota=$Kon,Naprava=$Nap";
break;
}
case 'Tarifa':
{
$IDTar=$_POST['Tar'];
$StevSas=$_POST['StevSas'];
$DDL=$_POST['DavLas'];
$SST=$_POST['SerTaMe'];
$Tarifa=$_POST['Tarifa'];
$sql = "update TarifaAvtomobil set IDTarife=$IDTar, StevSasije='$StevSas', DavStLastnik=$DDL, Tarifa='$Tarifa', SeriskaStev='$SST'";
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
$sql = "update VgradnjaKontrola set StevSasije='$Sas', SeriskaStev='$SST', DavStLastnik=$DSL, EMSO=$EMSO, DavStIzvajalec=$DSI, Vgradnja=$Vgradnja, Vrstaposega='$Vrstaposega'";
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
<form action="update.php" method="post">
<input type="hidden" name="update" value="User">
<input type="submit" value=" New User "/><br />
</form>
<form action="interface.php" method="post">
<input type="submit" value=" Back "/><br />
</form>