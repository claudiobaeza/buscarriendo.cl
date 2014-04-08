<?php
include("conexion.php");

$con = mysql_connect($host,$user,$pw)
or die("problema al conectar server");

mysql_select_db($db,$con)
or die("problemas al conectar la base de datos");

$registro = mysql_query("SELECT * FROM usuario WHERE nombre='$_POST[nombre]'")
or die("problema en consulta: ".mysql_error());

while($reg=mysql_fetch_array($registro)){

	echo $reg['nombre']."<br>";
	echo $reg['pass'],"<br>";
	
}

?>