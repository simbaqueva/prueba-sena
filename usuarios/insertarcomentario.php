<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="utf-8">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/style.css" type="text/css" media="all">
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
<body id="page2">
<div class="body1">
	<div class="main">
<!-- header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Air Lines</a><span id="slogan">una guia para tu futuro</span></h1>
				<div class="right">
					<nav>
						<ul id="top_nav">
							
						</ul>
					</nav>
					<nav>
						
					</nav>
				</div>
			</div>
		</header>
	</div>
</div>
<div class="main">
	<div id="banner">
		<div class="text1">
			UNIVERSIDADES<span>encuentra aqui tu guia de estudio</span><p></p>
		</div>
	</div>
</div>
<!-- header -->
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
				<html>
<div class="main">
<!-- content -->
	<section id="content">
		<article class="col1">
			<div class="pad_1">
		<!DOCTYPE html>
<html>
<head>
	<title>Comentario</title>
</head>
<body>
	<?php

if (isset($_REQUEST['loginuser'])) {
	extract($_REQUEST);
	//hacemos el llamado el archivo que contiene los valores de los parametros conexion a base  de datos
	require('conexionBasesDatos.php');
	//creamos el objeto conexion utilizando la extension mysqli
	$objConexion= new mysqli($host,$user,$password,$baseDatos);

	if ($objConexion -> connect_errno)
	{
			echo "Error de conexion a base de datos" . $objConexion->connect_error;
			exit();
	}

	$sql="insert into comentarios (Username,IdUniversidad,IdCarrera,Comentario) values ('$_REQUEST[loginuser]','$_REQUEST[selectuni]','$_REQUEST[selectcarr]','$_REQUEST[comentario]')";

	if($objConexion->query($sql))
	{

	echo "<br><br>Gracias Por Comentar y contar tu experiencia a los demas, Tu comentario se visualizara en nuestra pagina...!!";
	}
	else
	{
	echo "<br><br>Upps... Ha ocurrido un error. Intente nuevamente por favor!";
	}
}
else
{
	echo "No has iniciado Sesion o no estas Registrado!!!";
?>		
	<br><br>
	Ir a <a href="formulario ingresar usuario.html">LOGIN</a>
	ó <a href="formulario insertar usuario.html">REGISTRARSE</a>
	<br>
	<br>
	<a href="index.php">Volver</a>
<?php		
}

?>
</body>
</html>