<!DOCTYPE HTML>
<html lang="es">

<head>

        <meta charset="utf-8 http-equiv="Refresh" content="5"; url="http://claudio_baeza.byethost7.com/buscarriendo/index.php">

</head>


<?php
session_start();
include("conexion.php");
if(isset($_POST['usr']) && !empty($_POST['usr']) &&
isset($_POST['pass']) && !empty($_POST['pass']))
{
$con=mysql_connect($host,$user,$pw)or die("problemas con el servidor");
mysql_select_db($db,$con)or die("prblemas con la base de datos");
	
$sel=mysql_query("SELECT usr, pass FROM usuario WHERE usr='$_POST[usr]'",$con);
$usuario=mysql_query("SELECT nombre FROM usuario WHERE usr='$_POST[usr]'",$con);
$sesion=mysql_fetch_array($sel);

if($_POST['pass'] == $sesion['pass']){
	$_SESSION['username'] = $_POST['usr'];
	echo "sesion exitosa";
	
}else {
	echo "Usuario o contraseña incorrectos";
}
	
}else{
echo "Debes completar ambos datos";
}
?>


<body>
	<p> Volveras al inicio en 5 segundos o puedes volver haciendo click <a href="http://claudio_baeza.byethost7.com/buscarriendo/index.php">aquí</a> </p>
</body>

</html>