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

<html>
<head>
<title>Problema</title>
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

	$sql="select * from usuarios";
	//asignar a una variable el resultado de la consulta
	$resultado=$objConexion->query($sql);
	$ingreso=false;

	//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
	while ($datos=$resultado->fetch_array())
	{
		if ($_REQUEST['username']==$datos['Username']) 
		{
			$ingreso=true;
			if ($_REQUEST['password']==$datos['PasswordUsuario']) {
				$sql="delete from usuarios where Username='$_REQUEST[username]'";
				
				if($objConexion->query($sql))
				{
					echo "<br><br>Usuario Borrado Correctamente!!";
				}
				else
				{
					echo "vuelva a intentarlo!";
				}
			}
			else
			{
				echo "Contraseña incorrecta";
			}
		}
	}
	if ($ingreso==0) 
	{
		echo "ESTE USERNAME NO EXISTE";
	}
}
else
{
	echo "No has iniciado Sesion o no estas Registrado!!!";
?>		
	<br><br>
	Ir a <a href="formulario ingresar usuario.html" class="button_top">ENTRAR</a>
	ó <a href="formulario insertar usuario.html" class="button_top">REGISTRARSE</a>
	<br>
	<br>
	<a href="index.php">Volver</a>
<?php		
}

?>


?>
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