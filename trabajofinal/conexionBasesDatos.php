<?php
//Variables parametros conexion servidor y base de datos
$host="localhost";
$user="root";
$password="";
$baseDatos="base1";

//creamos el objeto conexion utilizando la extension mysqli
$objConexion = new mysqli($host,$user,$password,$baseDatos);

//verificamos la conexion
if ($objConexion-> connect_errno) {
 	echo "Error de Conexion de Base de Datos". $objConexion-> connect_error;
 	exit();
 } 

 ?>