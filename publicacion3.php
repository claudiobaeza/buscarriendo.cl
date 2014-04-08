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
	


	#divimagen
	{
	margin: 0 auto;
	text-align: left;
	width: 45%;
	}

	#divimagen2
	{
	margin: 0 auto;
	text-align: left;
	width: 63%;
	}


	#divcat1
	{
	margin: 0 auto;
	text-align: center;
	width: 25%;
	float:left;
	border-right: 1px solid white;
	}
  	
	#divcat2
	{
	margin: 0 auto;
	text-align: center;
	width: 25%;
	float:left;
		}
	
	#divcat3
	{
	margin: 0 auto;
	text-align: center;
	width: 25%;
	float:left;
  	border-left: 1px solid white;
		}

	#divcat4
	{
	margin: 0 auto;
	text-align: center;
	width: 15%;
	float:left;
  		}
	
	#divcat5
	{
	margin: 0 auto;
	text-align: center;
	width: 53%;
	float:left;
  		}

	#divcat6
	{
	margin: 0 auto;
	text-align: center;
	width: 35%;
	float:left;
	border-right: 1px solid white;
	color: red;
	
	}
  	
	
	
	a.radio-picture { 
	
	display: inline-block; 
	height: 64px; 
	width: 64px;
	}

	

	a#categoria_casa { 
	background: url("image/casa.png") no-repeat scroll 0 0 white; 
	} 
	a#categoria_departamento {  
	background: url("image/departamento.png") no-repeat scroll 0 0 white; 
	} 
	a#categoria_cabaña {   
	background: url("image/cabaña.png") no-repeat scroll 0 0 white; 
	} 
	a#categoria_completa {   
	background: url("image/completa.png") no-repeat scroll 0 0 white; 
	} 
	a#categoria_privada {   
	background: url("image/privada.png") no-repeat scroll 0 0 white; 
	} 
	a#categoria_compartida {   
	background: url("image/compartida.png") no-repeat scroll 0 0 white; 
	} 
	
	.hidden {   
	left: -10000px;   
	position: absolute;   
	top: -1000px; } 
		
	 .tildado{
    background-color: red;
	
  }	
		
  </style>

	
 
    <!--javasss-->
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	
	<script src="js/spa.min.js"></script>
    
	<script src="js/jquery.js"></script>


    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
   
<body class="fondo-rio2" id="inicio" style="overflow-x: hidden;" data-twttr-rendered="true">



<header>         
								
		<nav id="barra" class=" fondo-esmeralda">
					
						
							
				<div style="float: left;" ><a id="boton4" class="boton relleno10x texto-blanco " data-display="ventana4" data-type="exito" >INICIAR SESIÓN</a></div>			
				
								
										
						<div style="float: left;">	
				<a id="boton3" class="boton relleno10x texto-blanco " data-display="ventana3" data-type="exito" >REGISTRARSE</a></div>	
								
																									
						
						<div style="float: right;"> <a href="index.php" id="boton5" class="texto-sombra grande  brillo" >BUSCARRIENDO</a></div>
						<div style="float: right;"> <a id="boton6" class=" boton relleno10x bordes-redondeados fondo-sol texto-nube margen50x-abajo ">PUBLICAR INMUEBLE</a></div>
					
				</nav>
					
				 				 
</header>

				
				
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
<br>
<br>

<article class="degradado texto-blanco alinear-centro">
	<header class="relleno50x">

<h3 class="alinear-centro relleno20x-abajo">
REGISTRA TU INMUEBLE
</h3>
<br>



 
<form name="inmuebles" method="post" action="">


<!--<div id="divimagen" class="fondo-rio2 negrita">
<p class="alinear-izq">TIPO DE INMUEBLE</p>
<span><label class="texto-blanco fondo-rio2 negrita">

<div id="divcat1" class="fondo-asbesto">Casa<input type="radio" name="inmueble" value="casa"><br>
<img class="blancoynegro fondo-asbesto" style="border-right-width: 4em;" src="image/casa.png" onclick="this.parentNode.firstChild.checked=!this.parentNode.firstChild.checked" />
</span>
</div>

<span><label class="texto-blanco fondo-rio2 negrita">
<div id="divcat2" class="fondo-asbesto" ">Departamento<input type="radio" name="inmueble" value="departamento"><br>
<img class="blancoynegro fondo-asbesto" src="image/departamento.png" onclick="this.parentNode.firstChild.checked=!this.parentNode.firstChild.checked" />
</span>
</div>


<span><label class="texto-blanco fondo-rio2 negrita">
<div id="divcat3" class="fondo-asbesto" ">Cabaña<input type="radio" name="inmueble" value="cabaña"><br>
<img class="blancoynegro fondo-asbesto" src="image/cabaña.png" onclick="this.parentNode.firstChild.checked=!this.parentNode.firstChild.checked" />
</span>
		</div>
	</div>-->
<p class="alinear-centro negrita">TIPO DE INMUEBLE</p>	
<div style="width:50%; margin:0 auto;" class="fondo-granada alinear-centro">
<p>
Casa<input type="radio" name="inmueble" value="1" id="categoria_1" class="hidden"  />
<a id="categoria_casa" href="javascript:set_radio('categoria_1');" class="radio-picture">&nbsp;</a>

Departamento<input type="radio" name="inmueble" value="2" id="categoria_2" />
<a id="categoria_departamento" href="javascript:set_radio('categoria_2');" class="radio-picture " >&nbsp;</a>

Cabaña<input type="radio" name="inmueble" value="3" id="categoria_3" />
<a id="categoria_cabaña" href="javascript:set_radio('categoria_3');" class="radio-picture " >&nbsp;</a>

</p>
</div>
	

<p class="alinear-centro negrita">¿QUE OFRECES?</p>	
<div style="width:50%; margin:0 auto;" class="fondo-granada alinear-centro">
<p>

Casa/Depto. Completo<input type="radio" name="inmueble" value="4" id="categoria_4" class="hidden"  />
<a id="categoria_completa" href="javascript:set_radio('categoria_4');" class="radio-picture">&nbsp;</a>

Pieza Privada<input type="radio" name="inmueble" value="5" id="categoria_5" />
<a id="categoria_privada" href="javascript:set_radio('categoria_5');" class="radio-picture " >&nbsp;</a>

Pieza Compartida<input type="radio" name="inmueble" value="6" id="categoria_6" />
<a id="categoria_compartida" href="javascript:set_radio('categoria_6');" class="radio-picture " >&nbsp;</a>


	</p>
		</div>
	

<p class="alinear-centro negrita">CAPACIDAD</p>	
<div style="width:50%; margin:0 auto;" class="fondo-granada alinear-centro">
<p>
Capacidad
<img src="image/capacidad.png" "width=64px" "height=64px" ><select id=capacidad"> 

<option value="" id="opcion1">
       1 
    </option>
<option value="" id="opcion2">
       2 
    </option>
<option value="" id="opcion2">
       3 
    </option>
<option value="" id="opcion2">
       4 
    </option>
<option value="" id="opcion2">
       5 
    </option>
<option value="" id="opcion2">
       6 
    </option>
<option value="" id="opcion2">
       7 
    </option>
<option value="" id="opcion2">
       8 
    </option>
<option value="" id="opcion2">
       9 
    </option>
<option value="" id="opcion2">
       10 
    </option>
<option value="" id="opcion2">
       11 
    </option>
<option value="" id="opcion2">
       12
    </option>
 </select>
</p>
</div>

<p class="alinear-centro negrita">CIUDAD</p>	
<div style="width:50%; margin:0 auto;" class="fondo-granada alinear-centro">
<p>
<div>Ciudad<img src="image/ciudad.png" width="64px" heignt="64px"/> <input type="text" name="ciudad" placeholder="Santiago, Viña del Mar, Pucon..." class="margen20x-abajo"><br>


</div>
</p>
</div>

<div><input type="submit" name="forminmueble" value="Siguiente">
</div>

</form>

	</header>
</article>




<footer class="relleno20x">
    <p class="alinear-centro">
        &copy; Copyright 2013. Todos los derechos reservados
    </p>
         <div class="alinear-centro"><img class="zoom" src="image/w3c.png" width='90' height='53' alt="Validado por W3C"  >
         <img class="zoom" src="image/html.png" width='90' height='53' alt="Diseñado con HTML5 y CSS3"  > </div>
</footer>
	
	
	<script>
<!--

/*
rollover buttons script credit: Website Abstraction (www.wsabstract.com) More free JavaScripts here
*/

function change(color){
if (event.srcElement.tagName=="INPUT")
event.srcElement.style.backgroundColor=color
}

function jumpto(url){
window.location=url
}

//-->
</script>

<form onMouseover="change('lightgreen')" >
<input type="radio" value="Esempio 01 " style="font-weight:bold"  onFocus="change('green')" class="tildado"><br>
<input type="button" value="Esempio 02 " style="font-weight:bold"  onClick="jumpto('http://www.htmlpoint.com/script')"><br>
<input type="button" value="Esempio 03 " style="font-weight:bold"  onClick="jumpto('http://www.htmlpoint.com/script')">

</form>
	
	
	
	
	
	
	
	
		<script>
                        
						alertas("#boton3");
						alertas("#boton4");
						
						
		 $(function(){
      $('input[type="radio"]').on('click',function(){
       $('input[type="radio"].tildado').removeClass('tildado');
        $(this).addClass('tildado');
    });
  });				
						
						
		
		function set_radio($inputid) {  
		$("input#" + $inputid).click();
		
		}
						
$("").click(function(){ 
       if ($(this).hasClass("blancoynegro"))
	   {
             $(this).removeClass("blancoynegro");
               
      } 
	  else 
	  {
              $(this).addClass("blancoynegro");     
      }
	  
});	


							
        </script>
</body>
</html>
