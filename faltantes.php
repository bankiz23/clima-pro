<?php
require_once 'BD.php';
$BD = new BD();
session_start();
if (isset($_SESSION['user2'])) {
    # code...
?>
<!DOCTYPE html>
<html>
<html class="no-js"> 
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Menu &mdash; Menu Clima Laboral</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Menu Clima Laboral" />
  <meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  <meta name="author" content="FreeHTML5.co" />

 
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />


  <link rel="shortcut icon" href="favicon.ico">

  <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
  

  <link rel="stylesheet" href="css/animate.css">
  
  <link rel="stylesheet" href="css/icomoon.css">

  <link rel="stylesheet" href="css/bootstrap.css">
  
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/style.css">

  
  <script src="js/modernizr-2.6.2.min.js"></script>
  

  </head>
  <body>
  <div id="fh5co-page">
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
    <aside id="fh5co-aside" role="complementary" class="border js-fullheight">

      <h1 id="fh5co-logo"><a href="index.html">
      <img src="images/logo.ico" alt="MENU CLIMA LABORAL"></a></h1>
        <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="cerrar_sesion.php">Salir</a></li>
                    <li ><a href="crearEncuesta.php">Crear Preguntas</a></li>
                     <li><a href="preabierta.php">preguntas abiertas</a></li>
                   <li><a href="reiniciar.php">Reiniciar  encuesta</a></li>
                     <li><a href="Bloques/index2.php">Ver Graficas</a></li>
                     <li><a href="pdfAll.php">Respuestas todas</a></li>

                </ul>
            </nav>

      <div class="fh5co-footer">
      
      </div>

    </aside>

<head>
	<title>Faltantes</title>
</head>
<body>
<?php 

                  echo "<center>
                  <table border=0 > ";
                  
                  echo "<tr>
                  <td></td>  
                  <td><H3>FALTAN DE CONTESTAR LA ENCUESTA</H3></td>  
                  <td></td>  
                  
                   </tr>";
                          
            $faltan = $BD->Faltantes();

            foreach ($faltan as $row) {
                    
                            echo'<tr>';
                            echo '<td width = "25%" >'

                            .'<br>'.'<br>'.'</td>';

                            echo '<td width="40%">'.
                            '<h4>'.$row['id_empleado'].'&nbsp;&nbsp;'.$row['nombre'].'<h4>'.'<td>';

                            echo '<td width="9%">'.
                            '<h4>'.'<img src="rechazo.png" alt=15px height=15px>'.'<h4>'.'<td>'.'&nbsp;&nbsp;&nbsp;';
							 }
                





























?>



 <script src="js/jquery.min.js"></script>
    <!-- jQuery Easing -->
    <script src="js/jquery.easing.1.3.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Stellar -->
    <script src="js/jquery.stellar.min.js"></script>
    <!-- Waypoints -->
    <script src="js/jquery.waypoints.min.js"></script>
    <!-- Counters -->
    <script src="js/jquery.countTo.js"></script>
    
    
    <!-- MAIN JS -->
    <script src="js/main.js"></script>
</body>
</html>
<?php 
}else{
    header("Location: index.html");
}
?>