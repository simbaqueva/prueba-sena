<?php
/*hacemos el llamado que contiene las valores parametros conexion a la base de datos*/
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
$sql="select * from usuarios";
//asignar a una variable el resultado de la conzulta
$resultado=$objconexion->query($sql);

//procedemos a mmostrarlos en pantalla
$i=1;
//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
while ($datos=$resultado->fetch_array())
{
	echo"<br> paciente".$i;
	echo"<br>";
	echo $datos['NombreUsuario']."<br>";

	$i++;
}

?>