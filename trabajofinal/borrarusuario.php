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
	Ir a <a href="formulario ingresar usuario.html">LOGIN</a>
	ó <a href="formulario insertar usuario.html">REGISTRARSE</a>
	<br>
	<br>
	<a href="index.php">Volver</a>
<?php		
}

?>


?>
</body>
</html>