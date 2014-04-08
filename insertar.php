<?php
include("conexion.php");
if(isset($_POST['usr']) && !empty($_POST['usr']) &&
isset($_POST['nombre']) && !empty($_POST['nombre']) &&
isset($_POST['ap_pat']) && !empty($_POST['ap_pat']) &&
isset($_POST['ap_mat']) && !empty($_POST['ap_mat']) &&
#isset($_POST['nacimiento']) && !empty($_POST['nacimiento']) &&
#isset($_POST['sexo']) && !empty($_POST['sexo']) &&
isset($_POST['mail']) && !empty($_POST['mail']) &&
isset($_POST['pass']) && !empty($_POST['pass']))
{

$con=mysql_connect($host,$user,$pw) or die("Problemas al conectar");
mysql_select_db($db,$con)or die("Problemas al conectar la base de datos");

mysql_query("INSERT INTO usuario (usr,nombre,ap_pat,ap_mat,mail,pass) values ('$_POST[usr]','$_POST[nombre]','$_POST[ap_pat]','$_POST[ap_mat]','$_POST[mail]','$_POST[pass]')",$con);
echo "Datos insertados";
}else{
echo "Problemas al insertar datos";
}

?>