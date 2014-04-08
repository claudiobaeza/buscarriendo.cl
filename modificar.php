<?php

include("conexion.php");

$con=mysql_connect($host,$user,$pw)or die
("Problema en servidor");

mysql_select_db($db,$con)or die
("problemas con base de datos");

mysql_query("UPDATE usuario set pass='$_POST[nuevo]'
WHERE pass='$_POST[viejo]'",$con)or die(mysql_error());

echo "Actualizacion correcta";

?>