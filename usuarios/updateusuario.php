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
	<title>Problema</title>
</head>
<body>
<?php
extract($_REQUEST);
//hacemos el llamado el archivo que contiene los valores de los parametros conexion a base  de datos
require('conexionBasesDatos.php');
//creamos el objeto conexion utilizando la extension mysqli
$objConexion=mysqli_connect($host,$user,$password,$baseDatos);

if ($objConexion -> connect_errno)
     {
		echo "Error de conexion a base de datos" . $objConexion->connect_error;
		exit();
	}

$sql="select * from usuarios";
//asignar a una variable el resultado de la consulta
$resultado=$objConexion->query($sql);
$ingreso=false;
//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado

	
if (isset($_REQUEST['anombre']))
{
	mysqli_query($objConexion, "update usuarios set NombreUsuario='$_REQUEST[anombre]' where Username='$_REQUEST[loginuser]'") or die ("Problemas en el select:".mysqli_error($objConexion));
	echo "El Nombre fue modificado con exito<br>";
}

if (isset($_REQUEST['aapellido'])) 
{
		mysqli_query($objConexion, "update usuarios
                      set ApellidoUsuario='$_REQUEST[aapellido]' 
                    where Username='$_REQUEST[loginuser]'") or
	die("Problemas en el select:".mysqli_error($objConexion));
	echo "El Apellido fue modificado con exito<br>";
}

if (isset($_REQUEST['aemail']))
{
		mysqli_query($objConexion, "update usuarios
                      set EmailUsuario='$_REQUEST[aemail]' 
                    where Username='$_REQUEST[loginuser]'") or
	die("Problemas en el select:".mysqli_error($objConexion));
	echo "El Email fue modificado con exito<br>";
}

if (isset($_REQUEST['apass'])) 
{
		mysqli_query($objConexion, "update usuarios
                      set PasswordUsuario='$_REQUEST[apass]' 
                    where Username='$_REQUEST[loginuser]'") or
	die("Problemas en el select:".mysqli_error($objConexion));
	echo "La contraseña fue modificado con exito<br>";
}




?>

<br>
	<br>
	<a href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/prueba.html" class="button_top" >Volver</a>
</body>
</html>