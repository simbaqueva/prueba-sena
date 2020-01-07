<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
<?php 

if (isset($_REQUEST['loginuser'])) {
			extract($_REQUEST);
	//hacemos el llamado el archivo que contiene los valores de los parametros conexion a base  de datos
		require('conexionBasesDatos.php');
	?>
	<center>
		<h1>ACTUALIZAR INFORMACION</h2>
		<br><br>
	<form action="updateusuario.php" method="POST">
	<?php 
		if (isset($_REQUEST['upnombre'])) {
			echo "Digite el Nombre nuevo: ";
	?>
			<input type="text" name="anombre" size="30" required/>

	<?php
		}
	?>
		<br><br>

	<?php 
		if (isset($_REQUEST['upapellido'])) {
			echo "Digite el Apellido nuevo: ";
	?>
				<input type="text" name="aapellido" size="30" required/>

	<?php
		}
	?>
		<br><br>

	<?php 
		if (isset($_REQUEST['upemail'])) {
			echo "Digite el Email nuevo: ";
		?>
				<input type="text" name="aemail" size="40">
			
	<?php
		}
	?>
		<br><br>

	<?php 
		if (isset($_REQUEST['uppass'])) {
			echo "Digite La contraseña nueva: ";
	?>
				<input type="password" name="apass" size="30" required/>

				<input type="hidden" name="loginuser" value="<?php echo $_REQUEST['loginuser'];?>">
				<input type="hidden" name="loginpass" value="<?php echo $_REQUEST['loginpass'];?>">
				<input type="hidden" name="loginnombre" value="<?php echo $_REQUEST['loginnombre'];?>">
				<input type="hidden" name="loginapellido" value="<?php echo $_REQUEST['loginapellido'];?>">
				<input type="hidden" name="loginemail" value="<?php echo $_REQUEST['loginemail'];?>">
			
	<?php
		}
	?>

	<br><br>
	<input type="Submit" name="enviar" value="Actualizar!!">
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




</center>
</body>
</html>