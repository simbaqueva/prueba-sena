<!DOCTYPE html>
<html>
<head>
	<title>Actualizar</title>
</head>
<body>
<?php 
	extract($_REQUEST);
//hacemos el llamado el archivo que contiene los valores de los parametros conexion a base  de datos
	require('conexionBasesDatos.php');
	require('ingresarusuario.php');
?>
<center>
	<h1>FORMULARIO PARA ACTUALIZAR PACIENTES</h2>
	<br><br>

<?php 
	if (isset($_REQUEST['up'])) {
		 echo "Digite el Nombre nuevo: ";
	?>
		<form action="updateusuario.php" method="POST">
			<input type="text" name="nombre">
		</form>	
		<?php
	}
?>
	<br><br>

<?php 
	if (isset($_REQUEST['up'])) {
		echo "Digite el Apellido nuevo: ";
	?>
		<form action="updateusuario.php" method="POST">
			<input type="text" name="nombre">
		</form>	
		<?php
	}
?>
	<br><br>

<?php 
	if (isset($_REQUEST['up'])) {
		echo "Digite el Email nuevo: ";
	?>
		<form action="updateusuario.php" method="POST">
			<input type="text" name="nombre">
		</form>	
		<?php
	}
?>
	<br><br>

<?php 
	if (isset($_REQUEST['up'])) {
		echo "Digite La contrase&ntildea nueva: ";
	?>
		<form action="updateusuario.php" method="POST">
			<input type="text" name="nombre">
		</form>	
		<?php
	}
?>


</center>
</body>
</html>