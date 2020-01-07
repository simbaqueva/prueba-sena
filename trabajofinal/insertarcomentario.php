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