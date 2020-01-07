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
	$sql="select * from comentarios";
	//asignar a una variable el resultado de la conzulta
	$resultado=$objconexion->query($sql);

	//procedemos a mmostrarlos en pantalla
	$i=1;

	while ($datos=$resultado->fetch_array())
	{
		if ($_REQUEST['loginuser']==$datos['Username']) 
		{
			echo "!!! Este USUARIO ya ha realizado un comentario!!!";
			exit();
		}
	}

?>
	
	<form action="insertarcomentario.php" method="POST">
	<strong><i>PASO 3... Dinos como te fue con esta Carrera!!!: </i></strong>
	<br>
	<textarea name="comentario" rows="10" cols="100"></textarea>

	<input type="hidden" name="loginuser" value="<?php echo $_REQUEST['loginuser'];?>">
	<input type="hidden" name="loginpass" value="<?php echo $_REQUEST['loginpass'];?>">
	<input type="hidden" name="loginnombre" value="<?php echo $_REQUEST['loginnombre']; ?>">
	<input type="hidden" name="loginapellido" value="<?php echo $_REQUEST['loginapellido'];?>"
	<input type="hidden" name="loginemail" value="<?php echo $_REQUEST['loginemail'];?>">

	<input type="hidden" name="selectuni" value="<?php echo $_REQUEST['selectuni'];?>">
	<input type="hidden" name="selectcarr" value="<?php echo $_REQUEST['selectcarr'];?>">
	<br><br>
	<input type="submit" name="continuar2" value="Continuar!">
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
	
</body>
</html>
