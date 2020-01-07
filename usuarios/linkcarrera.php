<!DOCTYPE html  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css//reset.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/css/style3.css" type="text/css" media="all">
<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_600.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_italic_400.font.js"></script>
<script type="text/javascript" src="js/Myriad_Pro_400.font.js"></script>
<!--[if lt IE 9]>
  <script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
  <script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
</head>
<body id="page2">
<div class="body1">
  <div class="main">



<!-- header -->
    <header>
      <div class="wrapper">
        <h1><a href="index.html" id="logo">Air Lines</a><span id="slogan">una guia para tu futuro</span></h1>
        <div class="right">
        
          <nav>
            <ul id="menu">
              <li></a></li>
              <li id="menu_active"></li>
              <li></a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
  </div>
</div>


<div class="main">
  <div id="banner">
    <div class="text1">
      UNIVERSIDADES<span>una guia para tu futuro</span><p></p>
    </div>
  </div>
</div>

  <div id=”div1″>

  <center>
<article class="cols">
<div style="position: absolute; left: 900px; top: 10px; width: 100px; height: 300px;>

<h2></h2>

eeeeeeeeeeee

          <p><strong></strong> </p>
          <p> <a href="#"></a> </p>
        </article>        
<br>

<center>
  <h1>LISTADO DE CARRERAS DE ESTA UNIVERSIDAD</h1><br><br><br>


  
  
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
$sql="select * from carreras where IdUniversidad='$_REQUEST[selectuni]'";
//asignar a una variable el resultado de la conzulta
$resultado=$objconexion->query($sql);

//procedemos a mmostrarlos en pantalla
$i=1;
//en la variable datos se va guardando  registro a registro hasta llegar al final del resultado
while ($datos=$resultado->fetch_array())
{
    ?>

<div id=”div1″>

    <center>
<article class="cols">
<div style="position: absolute; left: 9px; top: 1px; width: 1px; height: 3px;>

                

                    <h2></h2>

                    <p><strong></strong> </p>
                    <p> <a href="#"></a> </p>
                </article>              

            <div  class="box1" >
                
                    <div class="pad_1">
                    <div  style="position: absolute;  ">
 
                        <div ALIGN="center"  style="background: ; font: 3pt/4pt  font-variant: small-caps; ">
                
                       
                            <p class="pad_bot2">
                        

</div>
</div>
</div>
                            <?php 

                            $i="";
                        
                            
                            echo $datos['NombreCarrera']."<br><br><br><br>";

                        
                             echo "Nivel De Carrera: ".$datos['NivelCarrera']."<br><br><br><br>";
                              echo "Modalidad: ".$datos['Modalidad']."<br><br><br><br>";
                               echo "Jornada: ".$datos['Jornada']."<br><br><br><br>";
                                echo "Costo: $".$datos['Costo']."<br><br><br><br>";




    

                            
                            
                            echo"".$i;

                            
                        



    $i;
    ?>


                            <span class="center"></span>&nbsp;<br>
                   
            </center>
        </article>
    
                            
<?php
    
}

?>
  

  </center>

            
</div>
</div>
</div>
<center>
</center>
</body>
</html>