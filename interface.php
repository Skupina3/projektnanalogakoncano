<?php

session_start();
if(!isset($_SESSION['user']))
{
	header("location: login.php");
}
else
{

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baza1";
$error="";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}

$myusername = $_SESSION['user'];

$sql = "SELECT pravice FROM user WHERE username='$myusername'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$pravice=$row["pravice"];

switch ($pravice)
{
case 'admin':
	{
	echo'
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="User">
	<input type="submit" value=" Posodobi uporabnika "/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Lastnik">
	<input type="submit" value=" Posodobi lastnika "/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Izvajalec">
	<input type="submit" value=" Posodobi izvajalca "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="User">
	<input type="submit" value=" Nov uporabnik "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Izvajalec">
	<input type="submit" value=" Nov izvajalec "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Lastnik">
	<input type="submit" value=" Nov lastnik "/><br />
	</form>

	<form action="select.php" method="post">
	<input type="hidden" name="select" value="User">
	<input type="submit" value=" Pregled uporabnikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Izvajalec">
	<input type="submit" value=" Pregled izvajalcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Lastnik">
	<input type="submit" value=" Pregled lastnikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Taksimeter">
	<input type="submit" value=" Pregled taksimetrov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Vgradnjakontrola">
	<input type="submit" value=" Pregled vgradenj "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Delavec">
	<input type="submit" value=" Pregled delavcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Racun">
	<input type="submit" value=" Pregled racunov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Cenik">
	<input type="submit" value=" Pregled cenikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Avtomobil">
	<input type="submit" value=" Pregled avtomobilov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Tarifaavtomobil">
	<input type="submit" value=" Pregled Tarif	"/><br />
	</form>';
	break;
	}
	case 'lastnik':
	{
	echo'	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Avto">
	<input type="submit" value=" Nov avtomobil "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Cenik">
	<input type="submit" value=" Nov cenik "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Racun">
	<input type="submit" value=" Nov racun "/><br />
	</form>
		
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="User">
	<input type="submit" value=" Pregled uporabnikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Izvajalec">
	<input type="submit" value=" Pregled izvajalcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Taksimeter">
	<input type="submit" value=" Pregled taksimetrov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Vgradnjakontrola">
	<input type="submit" value=" Pregled vgradenj "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Racun">
	<input type="submit" value=" Pregled racunov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Cenik">
	<input type="submit" value=" Pregled cenikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Avtomobil">
	<input type="submit" value=" Pregled avtomobilov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Tarifaavtomobil">
	<input type="submit" value=" Pregled Tarif	"/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Cenik">
	<input type="submit" value=" Cenik"/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Avtomobil">
	<input type="submit" value=" Posodobi avtomobil"/><br />
	</form>
	';
	break;
	}
	case 'izvajalec':
	{
	echo'
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Avto">
	<input type="submit" value=" Nov avtomobil "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Delavec">
	<input type="submit" value=" Nov delavec "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Taksimeter">
	<input type="submit" value=" Nov taksimeter "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Tarifa">
	<input type="submit" value=" Nova tarifa "/><br />
	</form>
	
	<form action="insert.php" method="post">
	<input type="hidden" name="insert" value="Vgradnja">
	<input type="submit" value=" Nova vgradnja taksimetra "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Izvajalec">
	<input type="submit" value=" Pregled izvajalcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Lastnik">
	<input type="submit" value=" Pregled lastnikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Taksimeter">
	<input type="submit" value=" Pregled taksimetrov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Vgradnjakontrola">
	<input type="submit" value=" Pregled vgradenj "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Delavec">
	<input type="submit" value=" Pregled delavcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Cenik">
	<input type="submit" value=" Pregled cenikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Avtomobil">
	<input type="submit" value=" Pregled avtomobilov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Tarifaavtomobil">
	<input type="submit" value=" Pregled Tarif	"/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Taksimeter">
	<input type="submit" value=" Posodobi taksimeter "/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Delavec">
	<input type="submit" value=" Posodobi delaveca "/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Tarifaavtomobil">
	<input type="submit" value=" Posodobi tarifo "/><br />
	</form>
	
	<form action="update.php" method="post">
	<input type="hidden" name="update" value="Vgradnjakontrola">
	<input type="submit" value=" Posodobi vgradnja kontrola "/><br />
	';
	break;
	}
	case 'ministri':
	{
	echo'<form action="select.php" method="post">
	<input type="hidden" name="select" value="Izvajalec">
	<input type="submit" value=" Pregled izvajalcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Lastnik">
	<input type="submit" value=" Pregled lastnikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Taksimeter">
	<input type="submit" value=" Pregled taksimetrov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Vgradnjakontrola">
	<input type="submit" value=" Pregled vgradenj "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Delavec">
	<input type="submit" value=" Pregled delavcev "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Cenik">
	<input type="submit" value=" Pregled cenikov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Avtomobil">
	<input type="submit" value=" Pregled avtomobilov "/><br />
	</form>
	
	<form action="select.php" method="post">
	<input type="hidden" name="select" value="Tarifaavtomobil">
	<input type="submit" value=" Pregled Tarif	"/><br />
	</form>';
	break;
	}
	}
}
?>