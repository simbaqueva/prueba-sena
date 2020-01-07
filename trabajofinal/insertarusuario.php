<!DOCTYPE html>
<html>
<head>
	<title>Registrado</title>
</head>
<body>

</body>
</html>

<?php


if (isset($_REQUEST['username'])) {
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
	
?>