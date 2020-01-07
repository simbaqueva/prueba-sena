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
							<li><a href="index.html"><img src="images/img1.gif" alt=""></a></li>
							<li><a href="index-4.html"><img src="images/img2.gif" alt=""></a></li>
							<li class="bg_none"><a href="#"><img src="images/img3.gif" alt=""></a></li>
						</ul>
					</nav>
					<nav>
						<ul id="menu">
							<li><a href="index.html">inicio</a></li>
							<li id="menu_active"><a href="index-1.html">universidades</a></li>
							<li><a href="index-2.html">carreras</a></li>
							<li><a href="index-3.html">costos</a></li>
							<li><a href="index-4.html">Contacts</a></li>
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

<?php
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
//asignar a una variable el resultado de la conzulta
$resultado=$objConexion->query($sql);

//procedemos a mmostrarlos en pantalla
$i=1;
//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
while ($datos=$resultado->fetch_array())
{
	if ($_REQUEST['username']==$datos['Username']) {
		echo "!!! Este USUARIO ya EXISTE !! intente nuevamente";
		exit();
	}
	$i++;
}	
if ($_REQUEST['password']==$_REQUEST['cpassword']) 
{
		//realizar el procedimiento de insertar un paciente
	//guardamos en una variable la sentencia sql,
	$sql="insert into usuarios(Username,NombreUsuario,ApellidoUsuario,EmailUsuario,PasswordUsuario) values ('$_REQUEST[username]','$_REQUEST[nombre]','$_REQUEST[apellido]','$_REQUEST[email]','$_REQUEST[password]')";

	// ejecutamos consulta llamando al metodo query del objeto conexion y pasando la sentencia sql

	if($objConexion->query($sql))
	{

	echo "<br><br>Usuario Registrado Correctamente!!";
	}
	else
	{
	echo "<br><br>Las contraseñas no son IGUALES, vuelva a intentarlo!";
	}
}
?>






				<!-- /	<div class="wrapper">
						Departure Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						Return Date and Time:
						<div class="wrapper">
							<div class="bg left"><input type="text" class="input input2" value="mm/dd/yyyy " onBlur="if(this.value=='') this.value='mm/dd/yyyy '" onFocus="if(this.value =='mm/dd/yyyy ' ) this.value=''"></div>
							<div class="bg right"><input type="text" class="input input2" value="12:00am" onBlur="if(this.value=='') this.value='12:00am'" onFocus="if(this.value =='12:00am' ) this.value=''"></div>
						</div>
					</div>
					<div class="wrapper">
						<p>Passenger(s):</p>
						<div class="bg left"><input type="text" class="input input2" value="# passengers" onBlur="if(this.value=='') this.value='# passengers'" onFocus="if(this.value =='# passengers' ) this.value=''"></div>
						<a href="#" class="button2" onClick="document.getElementById('form_1').submit()">go!</a>
					</div>
				</form>
				<!-- /<h2>Did You Know?</h2>
				<p><strong>Lorem ipsum dolor</strong> sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo. </p>
				<div class="wrapper pad_bot2"><a href="#" class="button2">Read More</a></div>
			</div>
		</article>
		<!-- /<article class="col2 pad_left1">
			<h2>Aircraft Sales</h2>
			<div class="wrapper">
				<figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
				<p><strong>Sed ut perspiciatis</strong> unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
			</div>
			<p>Vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem:</p>
			<div class="wrapper pad_bot1">
				<ul class="list1 cols marg_right1">
					<li><a href="#">Lipsum quia dolor amet consectetur</a></li>
					<li><a href="#">Vdipisci velit, sed quia non numquam</a></li>
					<li><a href="#">Dius modi tempora incidunt</a></li>
					<li><a href="#">Uliquam quaerat voluptatem enim</a></li>
				</ul>
				<ul class="list1 cols">
					<li><a href="#">Quis nostrum exercitationem</a></li>
					<li><a href="#">Quis autem vel eum iure reprehender</a></li>
					<li><a href="#">Ullam corporis suscipit laboriosam</a></li>
					<li><a href="#">Nisi ut aliquid ex commodi</a></li>
				</ul>
			</div>
			
			<!-- /<div class="wrapper"><a href="#" class="button1">Read More</a></div>
			<h2></h2>
			<div class="wrapper">
				<figure class="right marg_left1"><img src="images/page2_img2.jpg" alt=""></figure>
				<p><strong></strong></p>
				<p><strong></strong></p>
			</div>
		</article>
	</section>
<!-- / content -->
<!-- /</div>
<div class="body2">
	<div class="main">
<!--footer -->
		<!-- /<footer>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a> -->
		</footer>
<!-- / footer -->










	</div>
</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>