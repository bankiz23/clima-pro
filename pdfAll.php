<?php 
	require_once('BD.php');	
  $BD= new BD();
   $respuesta = $BD->preaAllPdf();

	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('MA');
	$pdf->SetTitle($_POST['reporte_name']);
	
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 20, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 10);
	$pdf->addPage();

	$content = '';
	
	$content .= '
		<div class="row">
        	<div class="col-md-12">
            	<h1 style="text-align:center;">RESPUESTAS DEL CLIMA LABORAL</h1>
       	
      <table border="1" cellpadding="5">
        <thead>
          <tr>
            <th>Pregunta</th>
            <th>empleado</th>
            <th>respuesta</th>
           
          </tr>
        </thead>
	';
	
	
	foreach ($respuesta as $row ) {
     # code...
   
		 
	$content .= '
		<tr>
            <td>'.$row['Pregunta'].'</td>
            <td>'.$row['empleado'].'</td>
            <td>'.$row['respuesta'].'</td>
           
        </tr>
	';
	}
	
	$content .= '</table>';
	
	$content .= '
		<div class="row padding">
        	<div class="col-md-12" style="text-align:center;">
            	<span>Pdf Creator </span>By MA 
            </div>
        </div>
    	
	';
	
	$pdf->writeHTML($content, true, 0, true, 0);

	$pdf->lastPage();
	$pdf->output('Todas_las_respuestas_de_todos_los_empleados.pdf', 'I');
}

?>
		 
          
        
<!doctype html>
<html lang="es">
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
                     <li><a href="preabierta.php">preguntas abiertas</a></li>
                     <li><a href="bloques/index2.php">Ver Graficas</a></li>
                     <li><a href="reiniciar.php">Reiniciar encuesta</a></li>
                   

                </ul>
            </nav>

            <div class="fh5co-footer">
               
            </div>
</div>

        </aside>

<body>
  <div class="container" >
  <div class="container" >
<div class="container" >
  <div class="container" >
 <div class="container" >
  <div class="container" >
	<div class="container-fluid">

        <div class="row padding">
        	<div class="col-md-12">
            <center>
            	<?php 
    
            	 echo '<h1>Respuestas del clima laboral</h1>'
				?></center>
            </div>
        </div>
    	<div class="row">
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Pregunta</th>
            <th>empleado</th>
            <th>respuesta</th>
           
          </tr>
        </thead>
        <tbody>
        <?php 
			foreach ($respuesta as $key) {
        # code...
    ?>
          <tr>
            <td><?php echo $key['Pregunta']; ?></td>
            <td><?php echo $key['empleado']; ?></td>
            <td><?php echo $key['respuesta']; ?></td>
            
          </tr>
         <?php } ?>
        </tbody>
      </table>
              <div class="col-md-12">
              	<form method="post">
                	<input type="hidden" name="reporte_name" value="todo">
                	<input type="submit" name="create_pdf" class="btn btn-danger pull-right" value="Generar PDF"><br>
                    <!--<a href="#"><input type="button" name="create_pdf" class="btn btn-success pull-right" value="Generar Excel"></a>
               --> </form>
              </div>
      	</div>
    </div></div></div></div></div></div></div>
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