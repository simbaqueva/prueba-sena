<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/reset2.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/style2.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script> 
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page5">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">universidades</a><span id="slogan"></span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							<li><a href="index.html"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.html"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index.html">INICIO</a></li>
							<li><a href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/usuarios/conzultaruniversidades.php">UNIVERSIDADES</a></li>
							<li><a href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/usuarios/borrarusuario.php">borrar usuario</a></li>
							<li><a href="index-3.html">COSTOS</a></li>
							<li id="menu_active"><a href="index-4.html">Contacts</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			UNIVERSIDADES<span>encuentra qui tu guia profesional</span><p></p>
		</div>
	</div>
</div>
<!-- / header -->
<div class="main">
<!DOCTYPE html>
<html>
<head>
	<title>Escribir comentario</title>
</head>
<body>

	<center>
	<h1>COMENTA TUS EXPERIENCIAS</h1><br><br><br>
	
	
<?php

	if (isset($_REQUEST['loginuser'])) {
		require ('conexionBasesDatos.php');
		//creamos el objeto utilizando la extension mysqli
		$objconexion = new mysqli($host,$user,$password,$baseDatos);
		//verificamos la conexion
		if ($objconexion-> connect_errno)
		{
			echo "error de conexion a la base de datos" .$objconexion-> connect_error;
			exit();
		}
		//vamos a realizar el proceso para conzultar los pasientes

		//guardamos en una variable la sentencia sql
		$sql="select * from universidades";
		//asignar a una variable el resultado de la conzulta
		$resultado=$objconexion->query($sql);

		//procedemos a mmostrarlos en pantalla
		$i=1;
?>
	
		<form action="formselectuni2.php" method="POST">
		<strong><i>PASO 1... Selecciona Tu Universidad: </i></strong>
		<br>
		<select name="selectuni">
<?php


		//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
		while ($datos=$resultado->fetch_array())
		{
			?>
			<option value="<?php echo $datos['IdUniversidad'];?>"><?php echo $datos['NombreUniversidad'];?></option>
			

<?php

		}
?>
		
		</select>
			<br><br>
		<input type="hidden" name="loginuser" value="<?php echo $_REQUEST['loginuser'];?>">
				<input type="hidden" name="loginpass" value="<?php echo $_REQUEST['loginpass'];?>">

				<input type="hidden" name="loginnombre" value="<?php echo $_REQUEST['loginnombre']; ?>">
				<input type="hidden" name="loginapellido" value="<?php echo $_REQUEST['loginapellido'];?>"
				<input type="hidden" name="loginemail" value="<?php echo $_REQUEST['loginemail'];?>">

		<input type="submit" name="continuar1" value="Continuar!">
		</form>
<?php		
	}
	else
	{
		echo "No has iniciado Sesion o no estas Registrado!!!";
?>		
		<br><br>
		Ir a <a href="formulario ingresar usuario.html">LOGIN</a>
		ó <a href="formulario insertar usuario.html">REGISTRARSE</a>

<?php		
	}

?>	
	</center>
</body>
</html>








<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2></h2>
				<span class="cols">
					<br>
					<br>
					<br>
					
				</span>
				<br>
				<br>
				<br>
				<a href="mailto:">businessco@mail.com</a>
				<h2></h2>
				<p></p>
			</div>
		</article>
		
					
			</form>
		</article>
	</section>
<!-- / content -->
</div>
<div class="body2">
	<div class="main">
<!-- footer -->
		<footer>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>