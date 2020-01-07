<!DOCTYPE html>
<html>
<head>
	<title>Ingreso</title>
</head>
<body>
<center>
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

?>
				
				
				<form action="formupdate.php" method="POST">
				<table border=1>
				<tr>
					<td colspan="3"><center><strong>INGRESO SATISFACTORIO</strong></center></td>
				</tr>
				<tr>
					<td colspan="2"><center><strong>Informacion Personal</strong></center></td>
					<td><center><strong> Actualizar<br><i>(Marque los campos que quiere actualizar)</i></strong></center></td>
				</tr>
				<tr>
					<td><center><strong>UserName: </strong></center></td>
					<td><center><?php echo $datos['Username']."<br>";?></center></td>
					<td><center>No se puede Actualizar<br>este campo</center></td>
				</tr>
				<tr>
					<td><center><strong> Nombre Usuario</strong></center></td>
					<td><center><?php echo $datos['NombreUsuario']."<br>"; ?></center> </td>  
					<td><center><input type="checkbox" name="upnombre"></center></td>
				</tr>
				<tr>
					<td><center><strong>Apellido Usuario</strong> </center></td>
					<td><center><?php echo $datos['ApellidoUsuario']."<br>"; ?></center> </td>
					<td><center><input type="checkbox" name="upapellido"></center></td>
				</tr>
				<tr>
					<td><center><strong>Email Usuario</strong> </center></td>
					<td><center><?php echo $datos['EmailUsuario']."<br>"; ?></center> </td>
					<td><center><input type="checkbox" name="upemail"></center></td>
				</tr>
				<tr>
					<td><center><strong>Contraseña Usuario</strong> </center></td>
					<td> *********** </td>
					<td><center><input type="checkbox" name="uppass"></center></td>
					
				
				</tr>
				</table>
				<input type="hidden" name="loginuser" value="<?php echo $datos['Username'];?>">
					<input type="hidden" name="loginpass" value="<?php echo $datos['PasswordUsuario'];?>">

					<input type="hidden" name="loginnombre" value="<?php echo $datos['NombreUsuario']; ?>">
					<input type="hidden" name="loginapellido" value="<?php echo $datos['ApellidoUsuario'];?>"
					<input type="hidden" name="loginemail" value="<?php echo $datos['EmailUsuario'];?>">
					<br>
				<input type="submit" name="enviar" value="Actualizar!!">
				</form>

				<br><br>
				<hr>
				<br>

				<h2><em>¿YA HAS ESTUDIADO EN ALGUNA UNIVERSIDAD?</em></h2>
				<p><i>Seria de gran apoyo que contaras tus experiencias en esa universidad, para que los demas se animen a seguir adelante.<br>
				 Cuentanos ¿Como fue tu experiencia en la universidad que estudiaste?, ¿La educacion era buena?,<br> ¿El titulo otorgado te abrio muchas puertas? ¿La recomiendas?.<br> Solo SELECCIONA la universidad en que estudiaste, ESCOGE la carrera que realizaste y ESCRIBE como te fue...</i></p>
				<form action="formselectuni1.php" method="POST">
					<input type="hidden" name="loginuser" value="<?php echo $datos['Username'];?>">
					<input type="hidden" name="loginpass" value="<?php echo $datos['PasswordUsuario'];?>">

					<input type="hidden" name="loginnombre" value="<?php echo $datos['NombreUsuario']; ?>">
					<input type="hidden" name="loginapellido" value="<?php echo $datos['ApellidoUsuario'];?>"
					<input type="hidden" name="loginemail" value="<?php echo $datos['EmailUsuario'];?>">

					<button type="submit"> COMENTAR... </button>
				</form>
				<br><br><br>
				<hr>
				<form action="formulario borrar usuario.php" method="POST">
					<input type="hidden" name="loginuser" value="<?php echo $datos['Username'];?>">
					<input type="hidden" name="loginpass" value="<?php echo $datos['PasswordUsuario'];?>">
					<h6><p align="right">
						<button type="submit" name="borrar">Eliminar cuenta  :(</button>
					</p></h6>
					
				</form>


<?php
			}
			else
			{
				echo "Contraseña incorrecta";
			}
		}

	}
	if ($ingreso==0) {
		echo "Este USERNAME NO EXISTE";
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


</center>
</body>
</html>
