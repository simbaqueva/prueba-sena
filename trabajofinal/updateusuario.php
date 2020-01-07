<html>
<head>
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
	<a href="index.php">Volver</a>
</body>
</html>