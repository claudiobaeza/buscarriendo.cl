<DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Prueba de ODBC</title>
</head>

<body>
<h1>Prueba de ODBC</h1>

<form action="formulario.php" method="post">
<p>
Introduce el nombre que deseas buscar:
<input type="text" name="nombre" />
<br />
<input type="submit" value="Enviar" />
</p>
</form>

<div class="alertas " id="formulario">
                        <div>
                                <h3>TITULO DE LA VENTANA</h3>

                                    <div>
                                            <p >Aca el texto de la entana</p>
                                            <p >
                                                    <a class="cerrar-alerta">cerrar</a>
                                            <p>
                                    </div>
                        </div>
                </div>
                <div class="fondo-alertas"></div>
</body>
</html>