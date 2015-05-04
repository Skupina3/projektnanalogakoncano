
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Page</title>

<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
font-size:14px;

}
label
{
font-weight:bold;

width:100px;
font-size:14px;

}
.box
{
border:#666666 solid 1px;

}
</style>
</head>
<body bgcolor="#FFFFFF">

<div align="center">
<div style="width:300px; border: solid 1px #333333; " align="left">
<div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Insert</b></div>


<div style="margin:30px">

<form action="insert1.php" method="POST">
<?php
	$error='';
	$insert=($_POST['insert']);
	
	switch ($insert)
	{
		case 'User':
		{
		echo '
		<label>Username  :</label><input type="text" name="username" class="box"/><br /><br />
		<label>Password  :</label><input type="password" name="password" class="box" /><br/><br />
		<label>Pravice   :</label>
		<select name="pravice">
			<option value="admin">admin</option>
			<option value="minister">minister</option>
			<option value="lastnik">lastnik</option>
			<option value="izvajalec">izvajalec</option>
		</select class="box"><br/><br />
		<input type="hidden" name="insert" value="User">';
		break;
		}
		case 'Izvajalec':
		{
		echo'
		<label>Davcna stevilka  :</label><input type="text" name="DavSt" class="box"/><br /><br />
		<label>Telefon  :</label><input type="text" name="Telefon" class="box" /><br/><br />
		<label>Naziv  :</label><input type="text" name="Naziv" class="box" /><br/><br />
		<label>Naslov  :</label><input type="text" name="Naslov" class="box" /><br/><br />
		<label>Posta  :</label><input type="text" name="Posta" class="box" /><br/><br />
		<label>Fax  :</label><input type="text" name="Fax" class="box" /><br/><br />
		<label>GSM  :</label><input type="text" name="GSM" class="box" /><br/><br />
		<label>Spletna stran  :</label><input type="text" name="SpleSt" class="box" /><br/><br />
		<label>e-mail :</label><input type="text" name="email" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Izvajalec">';
		break;
		}
		case 'Lastnik':
		{
		echo'<label>Davcna stevilka  :</label><input type="text" name="DavSt" class="box"/><br /><br />
		<label>Telefon  :</label><input type="text" name="Telefon" class="box" /><br/><br />
		<label>Naziv  :</label><input type="text" name="Naziv" class="box" /><br/><br />
		<label>Naslov  :</label><input type="text" name="Naslov" class="box" /><br/><br />
		<label>Posta  :</label><input type="text" name="Posta" class="box" /><br/><br />
		<label>Fax  :</label><input type="text" name="Fax" class="box" /><br/><br />
		<label>GSM  :</label><input type="text" name="GSM" class="box" /><br/><br />
		<label>Spletna stran  :</label><input type="text" name="SpleSt" class="box" /><br/><br />
		<label>e-mail :</label><input type="text" name="email" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Lastnik">';
		break;
		}
		case 'Avto':
		{
		  echo'
			<label> Stevilka sasije:</label><input type="text" name="StevSasije" class="box"/><br /><br />
			<label> Znamka  :</label><input type="text" name="Znamka" class="box" /><br/><br />
			<label> Model: </label><input type="text" name="Model" class="box" /><br/><br />
			<label> Tip: </label><input type="text" name="Tip" class="box" /><br/><br />
			<label> Registrska stevilka: </label><input type="text" name="RegistrskaStev" class="box" /><br/><br />
			<label> Konstanta vozila W: </label><input type="text" name="KonstantaVozilaW" class="box" /><br/><br />
			<label> Zadnje pnevmatike: </label><input type="text" name="PnevmatikeZadaj" class="box" /><br/><br />
			<label> Sprednje pnevmatike: </label><input type="text" name="PnevmatikeSpredaj" class="box" /><br/><br />
			<label> Davcna stevilka lastnika: </label><input type="text" name="DavStLastnik" class="box" /><br/><br />
			<label> Serijska stevilka taksimetra: </label><input type="text" name="SerijskaStevTaksimeter" class="box" /><br/><br />
			<input type="hidden" name="insert" value="Avto">';
			break;
		}
		case 'Cenik':
		{
		echo'
		<label>ID Tarife:</label><input type="text" name="IDTarife" class="box"/><br /><br />
		<label>Startnina  :</label><input type="text" name="Startnina" class="box" /><br/><br />
		<label> Cena na km:</label><input type="text" name="Cena_km" class="box" /><br/><br />
		<label> Cakalna:</label><input type="text" name="Cakalna" class="box" /><br/><br />
		<label> Zamik v km:</label><input type="text" name="ZamikVkm" class="box" /><br/><br />
		<label> Cas zamika:</label><input type="text" name="CasZamika" class="box" /><br/><br />
		<label> Stevilo dodatkov:</label><input type="text" name="StDodatkov" class="box" /><br/><br />
		<label> Cena dodatka:</label><input type="text" name="CenaDodatka" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Cenik">';
			break;
		}
		case 'Delavec':
		{
		 echo'
		<label>EMSO:</label><input type="text" name="EMSO" class="box"/><br /><br />
		<label>Ime  :</label><input type="text" name="Ime" class="box" /><br/><br />
		<label> Priimek:</label><input type="text" name="Priimek" class="box" /><br/><br />
		<label> Davcna stevilka izvajalca:</label><input type="text" name="DavStIzvajalec" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Delavec">';
		break;
		}
		case 'Racun':
		{
		  echo'
		<label>Lokacija 1:</label><input type="text" name="Lokacija1" class="box"/><br /><br />
		<label>Serijska stevilka :</label><input type="text" name="SerijskaStev" class="box" /><br/><br />
		<label> Lokacija 2:</label><input type="text" name="Lokacija2" class="box" /><br/><br />
		<label> Lokacija 3:</label><input type="text" name="Lokacija3" class="box" /><br/><br />
		<label> IDTarife:</label><input type="text" name="IDTarife" class="box" /><br/><br />
		<label> Stevilka sasije:</label><input type="text" name="StevSasije" class="box" /><br/><br />
		<label> Davcna stevilka lastnika:</label><input type="text" name="DavStLastnik" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Racun">';
		break;
		}
		case 'Taksimeter':
		{
		echo'<label>Seriska stevilka taskimetra  :</label><input type="text" name="SerTaMe" class="box" /><br/><br />
		<label>Proizvajalec  :</label><input type="text" name="Proiz" class="box" /><br/><br />
		<label>Tip :</label><input type="text" name="Tip" class="box" /><br/><br />
		<label>Uradna oznaka  :</label><input type="text" name="Oznaka" class="box" /><br/><br />
		<label>Programska verzija :</label><input type="text" name="Verz" class="box" /><br/><br />
		<label>Kontrolna vsota :</label><input type="text" name="Kon" class="box" /><br/><br />
		<label>Naprava :</label>
		<input type="radio" name="Nap" value="1" checked>Da
		<input type="radio" name="Nap" value="0">Ne </br>
		<input type="hidden" name="insert" value="Taksimeter">';
		break;
		}
		case 'Tarifa':
		{
		echo'<label>IDTarife :</label><input type="text" name="Tar" class="box"/><br /><br />
		<label>Stevilka sasije  :</label><input type="text" name="StevSas" class="box"/><br /><br />
		<label>Seriska stevilka taskimetra  :</label><input type="text" name="SerTaMe" class="box" /><br/><br />
		<label>Davcna stevilka lastnika  :</label><input type="text" name="DavLas" class="box" /><br/><br />
		<label>Tarifa  :</label><input type="text" name="Tarifa" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Tarifa">';
		break;
		}
		case 'Vgradnja':
		{
		echo'<label>Stevilka sasije  :</label><input type="text" name="StevSas" class="box"/><br /><br />
		<label>Seriska stevilka taskimetra  :</label><input type="text" name="SerTaMe" class="box" /><br/><br />
		<label>Davcna stevilka lastnika  :</label><input type="text" name="DavLas" class="box" /><br/><br />
		<label>Davcna stevilka izvajalca  :</label><input type="text" name="DavIz" class="box" /><br/><br />
		<label>EMSO  :</label><input type="text" name="EMSO" class="box" /><br/><br />
		<label>Vgradnja  :</label>
		<input type="radio" name="Vgra" value="1" checked>Da
		<input type="radio" name="Vgra" value="0">Ne </br>
		<label>Vrsta posega :</label><input type="text" name="Pos" class="box" /><br/><br />
		<input type="hidden" name="insert" value="Vgradnja">';
		break;
		}
	}

?>
<input type="submit" value=" Submit "/><br /></form>
<div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
</div>
</div>
</div>

</body>
</html>