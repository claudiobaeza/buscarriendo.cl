<!doctype html>
<html lang="es">
<head>
    <!--metadatas-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0"/>
    <meta charset="utf-8">
    <title>BuscArriendo, tu decides donde alojar</title>
    <meta name="author" content="Claudio Baeza"/>
    <meta name="robots" content="All"/>
    <meta name="description" content="Buscarriendo es una plataforma web para quienes les gusta salir de vacaciones solos o en familia y arrendar en un lugar seguro, teniendo todo lo necesario para solo disfrutar"/>
    <meta name="keywords" content="arriendos, arrendatarios, arrendadores, inmuebles, vacaciones, descanzo, salir de lo comun, experiencia de viaje, innovador, lugar seguro, disfrutar"/>

    <!--estilos-->
    <link rel="stylesheet" type="text/css" href="css/spa.css"/>
    <style>
	.my_adslot {
		width: 320px;
		height: 50px;
	}
	@media (min-width: 500px) {
		.my_adslot {
			width: 468px;
			height: 60px;
		}
	}

	@media (min-width: 800px) {
		.my_adslot {
			width: 720px;
			height: 90px;
		}
	}
    </style>


    <!--iconos-->
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="apple-touch-icon" href="img/favicon.png"/>
    <link rel="apple-touch-icon-precomposed" href="img/favicon.png"/>

    <!--javasss-->
    <script src="js/jquery-2.0.3.min.js"></script>
    <script src="js/spa.min.js"></script>

    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->



</head>
   
<body class="fondo-rio2" id="inicio" style="overflow-x: hidden;" data-twttr-rendered="true">

<div class="irarriba zoom visible">
	<a href="#inicio" class="scroll-suave">
		<i class="icon-chevron-sign-up enorme brillo">
			subir
		</i>
	</a>
</div>

<header>         
				<!--<nav class="ocultar_en_celular">
                    <img src="image/foto.jpg">
                    <ul>
                            <li><a href="#link1" class="texto-azul">menu1</a></li>
                            <li><a href="#link2" class="texto-azul">menu2</a></li>
                            <li><a href="#link3" class="texto-azul">menu3</a></li>
                            <li><a href="#link3" class="texto-azul">menu4</a></li>
                    </ul>
                </nav>-->
				
				<nav id="barra" class=" fondo-esmeralda">
					
						
							
				<div style="float: left;" ><a id="boton4" class="boton relleno10x texto-blanco " data-display="ventana4" data-type="exito" >INICIAR SESIÓN</a></div>			
				
								
										
						<div style="float: left;">	
				<a id="boton3" class="boton relleno10x texto-blanco " data-display="ventana3" data-type="exito" >REGISTRARSE</a></div>	
								
																									
						
						<div style="float: right;"> <a id="boton5" class="texto-sombra grande  brillo" >BUSCARRIENDO</a></div>
						<div style="float: right;"> <a id="boton6" class=" boton relleno10x bordes-redondeados fondo-sol texto-nube margen50x-abajo" href="publicacion1.php">PUBLICAR INMUEBLE</a></div>
					
				</nav>
				
					
				 				 
</header>
<article class="degradado texto-blanco  alinear-centro">
<header class="relleno20x">
	
<div id='fotos' class=" banner-desvanecido grilla relleno20x-arriba ">
   
           
                <ul>
                         <li>
                                <img src="image/foto2.jpg" class="marco-polaroid" alt=""/>
                         </li>
                         <li>
                                <img src="image/foto.jpg" class="marco-polaroid" alt=""/>
                        </li>
                        <li>
                                <img src="image/foto3.jpg" class="marco-polaroid" alt=""/>
                        </li>
                </ul>
         
</div>
	 <div id='slogan' class="alinear-centro grande negrita"> TU ELIGES DONDE ALOJAR, PORQUE CHILE TE ENCANTA </div>	 
</header>
			
</article>



	<form>
		<label>Donde quieres alojar?</label>
		
			<input id="lugar" placeholder="¿Donde quieres alojar?" type="text">
			
			<label>Desde</label>
			<input name="llegada" type="date" value="" />
			
			<label>Hasta</label>
			<input name="salida" type="date" value="" />
			
			<label>¿Cuantos alojan?</label>
			<select id="personas">
				<option>1 Persona</option>
				<option>2 Personas</option>
				<option>3 Personas</option>
				<option>4 Personas</option>
				<option>5 Personas</option>
				<option>6 Personas</option>
				<option>7 Personas</option>
			</select>
			<br>

			<div class="alinear-centro"><input type="submit" STYLE="background-color: #389E28; border-color: #389E28; color: #FFFFFF; float-center" value="Busca tu lugar">
			<input type="reset" STYLE="background-color: #FB000D; border-color: #FB000D; color: #FFFFFF;" value="Borrar información"></div>
			
				
			</form>	
				
				
				<div class="alertas fondo-esmeralda texto-nube " id="ventana4">
                        <div>
                                <h3 class="relleno20x alinear-centro">INICIO DE SESIÓN</h3>

                                    <div class="alinear-centro">
                                            <p >Completa los datos para continuar</p>
											
											<form action="verificar.php" method="post" name="form">
					
			<label>Usuario: </label>
			<input name="usr" id="urs" type="text" >
			
			<label>Constraseña: </label>
			<input name="pass" type="password" >
			
			
			<br>
			<div class="alinear-centro"><input type="submit" STYLE="background-color: #514ED9; border-color: #514ED9; color: #FFFFFF;" value="Iniciar Sesión">
			<input type="reset" STYLE="background-color: #FB000D; border-color: #FB000D; color: #FFFFFF;" value="Borrar información">
			</div>
				
											</form>	
											
                                            <p class="margen20x">
                                                    <a class="cerrar-alerta fondo-nube texto-negro relleno10x alinear-centro margen50x-arriba negrita">cerrar</a>
                                            </p>
                                    </div>
                        </div>
                </div>
				
				<div class="alertas fondo-esmeralda texto-nube " id="ventana3">
                        <div>
                                <h3 class="relleno20x alinear-centro">REGISTRO DE NUEVOS USUARIOS</h3>

                                    <div class="alinear-centro">
                                            <p >Complete el siguiente formulario para completar su registro</p>
											
											<form action="insertar.php" method="post" name="form" >
					
			<label>Usuario: </label>
			<input name="usr" type="text" >
			<br>
			<label>Nombre: </label>
			<input name="nombre" type="text" >
			<br>
			<label>Apellido Paterno: </label>
			<input name="ap_pat" type="text" >
			<br>
			<label>Apellido Materno: </label>
			<input name="ap_mat" type="text" >
			<br>
			<!--<label for="sexo">Sexo: </label>
			<select id="sexo">
				<option>Hombre</option>
				<option>Mujer </option>
			</select>
			<br>-->
			<label>Correo Electrónico: </label>
			<input name="mail" type="text" placeholder="ejemplo@correo.cl" >
			<br>
			<label>Constraseña: </label>
			<input name="pass" type="password" >
			
			
			<br>
			<div class="alinear-centro"><input type="submit" STYLE="background-color: #514ED9; border-color: #514ED9; color: #FFFFFF;" value="Crear Registro">
			<input type="reset" STYLE="background-color: #FB000D; border-color: #FB000D; color: #FFFFFF;" value="Borrar información">
			</div>
				
											</form>
											
                                            <p class="margen20x">
                                                    <a class="cerrar-alerta fondo-nube texto-negro relleno10x alinear-centro margen50x-arriba negrita">cerrar</a>
                                            </p>
                                    </div>
                        </div>
                </div>
				<div class="fondo-alertas"></div>
				
				
				
		
		
		<article>
				
            <h1 class="alinear-centro relleno20x-abajo">ENCANTOS DE CHILE</h1>
			
           <div class="alinear-centro"> 
			<img src="image/tur1.jpg" width='30%' alt="" class="marco-circular blancoynegro" >
			<img  src="image/tur2.jpg" width='40%' alt="" class="marco-circular blancoynegro" >
			 <img  src="image/tur3.jpg" width='40%' alt="" class="marco-circular blancoynegro" >
			 <img  src="image/tur4.jpg" width='30%' alt="" class="marco-circular blancoynegro" >
			 </div>
        </article>
  
	

<footer class="relleno20x">
    <p class="alinear-centro">
        &copy; Copyright 2013. Todos los derechos reservados
    </p>
         <div class="alinear-centro"><img class="zoom" src="image/w3c.png" width='90' height='53' alt="Validado por W3C"  >
         <img class="zoom" src="image/html.png" width='90' height='53' alt="Diseñado con HTML5 y CSS3"  > </div>
</footer>
		<script>
                        bannerDesvanecido('#fotos', 500, 5000, 200);
						irarriba();
						alertas("#boton3");
						alertas("#boton4");
												
        </script>
</body>
</html>				
