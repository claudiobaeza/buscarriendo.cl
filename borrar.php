<?php

include("conexion.php");

$con=mysql_connect($host,$user,$pw)or die("problemas en servidor");
mysql_select_db($db,$con)or die("problemas en base de datos");

$reg=mysql_query("SELECT id_usr FROM usuario WHERE nombre = '$_POST[nombre]'",$con);

if($re=mysql_fetch_array($reg))
{
mysql_query("DELETE FROM usuario WHERE nombre = '$_POST[nombre]'",$con);
echo "datos eliminados";
}else{
	echo "datos no eliminados";
}

?>