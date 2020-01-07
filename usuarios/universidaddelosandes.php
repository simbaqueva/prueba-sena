<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Home</title>
  	<meta charset="utf-8">
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/1455_bcd557fb84ca7862f4359f3176bb94e2/css/style3.css">
    <script src="js/jquery-1.7.1.min.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/slider.js"></script>
    <script type="text/javascript">
		$(function(){
			function equalHeight(group) {
				var tallest = 0;
				group.each(function() {
					var thisHeight = $(this).height();
					if(thisHeight > tallest) {
						tallest = thisHeight;
					}
				});
				group.height(tallest);
			}	
			equalHeight($(".box-1 .inner"));
		})
	</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body id="page1">

                        
<!-- Header -->
 

<header>
    <div class="inner">

        <h1 class="logo"><a href="home.html"></a></h1>

<div class="image">


               <h1><img src="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/1455_bcd557fb84ca7862f4359f3176bb94e2/images/uniandes.jpg" alt=""></h1>
               
              <h2><span>    <font color="black" size="4" face="algerian">Universidad <span class='spacer'></span><br /><span class='spacer'></span></span>
        
              </h2></font>


 <DIV STYLE="position:absolute; top:100px; left:100px; visibility:visible z-index:1"> 
 <marquee   direction="left" scrolldelay="160" width="500" height="900">
<IMG height="200" SRC="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/1455_bcd557fb84ca7862f4359f3176bb94e2/images/logoandes.png" width="400">
</marquee > 
</div>

                    
       <h3><span> <font color="black" face="algerian" > De Los Andes<span class="spacer"></span></font></span></h3>
       
       <DIV STYLE="position:absolute; top:24px;  left:780px; visibility:visible z-index:1"> 
      <marquee direction="down" scrolldelay="160" wdth="500" height="400" >
<IMG height="160" SRC="http://localhost/dashboard/proyecto%20universidades/Free-AirLines-Website-Template1/Free%20AirLines%20Website%20Template/site/1455_bcd557fb84ca7862f4359f3176bb94e2/images/escudoandes.png" width="160" > 
 </marquee>


   </div>

        
               

            </ul>
        </div>
    </div>
</header>

        <div class="fright">
           
        </div>
        <div class="clear"></div>
    </div>


<!-- Content -->
<section id="content"><div class="ic"></div>
   
        <div class="indent-bot">
            <article class="grid_6">
                <div class="box-1">
                    <div class="inner">
                        <h3> 

     </div>
                    </div>
                </div>
            </div>


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
$sql="select * from carreras";
//asignar a una variable el resultado de la conzulta
$resultado=$objconexion->query($sql);

//procedemos a mmostrarlos en pantalla
$i="";
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

                        
                             echo $datos['NivelCarrera']."<br><br><br><br>";
                              echo $datos['Modalidad']."<br><br><br><br>";
                               echo $datos['Jornada']."<br><br><br><br>";
                                echo $datos['Costo']."<br><br><br><br>";




    

                            
                            
                            echo"".$i;

                            
                        



    $i;
    ?>


                            <span class="center"></span>&nbsp;<br>
                   
            </center>
        </article>
    
                            
<?php
    
}

?>





<!-- / footer -->








                
           
<!-- Footer -->


</body>
</html>