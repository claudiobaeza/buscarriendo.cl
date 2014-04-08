<?php
session_start();

if(isset($_SESSION['username'])){
echo "Has ingresado con exito";
echo "<br><a href=destruir.php>Cerrar Sesion</a>";
}else{
echo "No puedes ver esta pagina, debes registrarte";
}

?>