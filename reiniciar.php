<?php
require_once 'BD.php';
$BD = new BD();
session_start();
if (isset($_SESSION['user2'])) {
    # code...
?>
<br><br><br><br><br>
<br><br><br>






<!DOCTYPE html>
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


    

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    

    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/icomoon.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/style.css">

    
    <script src="js/modernizr-2.6.2.min.js"></script>
    






<style type="text/css">
    html, body {
        height: 100%;
        width: 100%;
        padding: 0;
        margin: 0;
    }

    #full-screen-background-image {
        z-index: -999;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 200;
    }


    #fondo{
/*background-color: orange;*/

       
    }
</style>






    </head>
    <body>


         

         <div id="fh5co-page">
        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
        <aside id="fh5co-aside" role="complementary" class="border js-fullheight">
<div   id="fondo"> 
            <h1 id="fh5co-logo"><a href="index.html">
            <img src="images/logo.ico" alt="MENU CLIMA LABORAL"></a></h1>
            <nav id="fh5co-main-menu" role="navigation">
                <ul>
                    <li class="fh5co-active"><a href="cerrar_sesion.php">Salir</a></li>
                    <li ><a href="verCampos.php">Ver campos</a></li>
                     <li><a href="faltantes.php">Faltantes</a></li>
                  <li ><a href="crearEncuesta.php">Crear Preguntas</a></li>
                     <li><a href="preabierta.php">preguntas abiertas</a></li>
                     <li><a href="bloques/index2.php">Ver Graficas</a></li>
                      <li><a href="pdfAll.php">Respuestas todas</a></li>
                </ul>
            </nav>

            <div class="fh5co-footer">
               <p><small>&copy; Menu Clima</span> <span>Designed by <a href="http://www.museoamparo.com" target="_blank">MA</a> </span> <span> <a href="http://unsplash.com/" target="_blank"></a></span></small></p>
              
            </div>
</div>

        </aside>

















        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/favicon1.ico">
        <title>CREAR ENCUESTA</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
 








   



<section id="form">





 <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
                                


    <form action="restart.php" class="contact_form">
        <ul>
            
                <h2>Reiniciar encuesta</h2>
                
                
                
                
            
                
             
                <label for="cantidad">ID del empleado: </label>
                <input type="number" name="clave" required class="form-control" placeholder="0" min="0" max="10000" required/><br>
                <center>
                <input type="submit" class="btn-danger submit" value="Reinicar"/><br><br>
                <a href="reniciarAll.php">Reiniciar para todos->>></a></center>
            
        </ul>
    </form>

</div>
</div><!-- jQuery -->
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
</div>
</div>

</div>
</div>
</section>


</section>

</body>
</html>
<?php 
}else{
    header("Location: index.html");
}
?>