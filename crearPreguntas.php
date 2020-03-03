<?php 
session_start();
if (isset($_SESSION['user2'])) {
    # code...
?>
<br><br><br><br><br>
<!DOCTYPE html>
<html><head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CREAR ENCUESTA</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    
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
        left: 0;
    }
</style>
<body>
 <img alt="full screen background image" src="fondo.jpg" id="full-screen-background-image" /> 




</html>
<?php
   
  //capturamos las variables que vienen por post
  //
   
  if (isset($_POST['id'])) {
      # code...
    require_once 'BD.php';  //para incluir la clase que maneja la BD
    $BD = new BD();
    $id = $_POST['id'];
    $TablaCampos = $BD->MostrarCampos($id); 
                    foreach ($TablaCampos as $row)
                    {
                      $suma = $row['cantidad']; 
                    }
    $cantidad = $_POST["sum"];
    $campo = $_POST['titulo'];
    $fecha = $_POST['fecha'];
    

    ?>
        <div class="container">
                    <div class="container form-top">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                <div class="panel panel-danger">
                                    <div class="panel-body">
        <section id="form">
            <form action="insert_cuestion.php" class="contact_form" method="post">
                <h3>Agregar preguntas a <?php echo $campo; ?></h3>
                <table>
                    <?php

                     //ciclo para recorrer la cantidad de preguntas ingresadas
                    for ($i=1; $i <= $cantidad; $i++) {
                    ?>
                <tr>
                    <td>Pregunta <?php echo $i; ?>&nbsp;
                    <input name="pregunta<?php echo $i; ?>" type="text" size = "50" maxlength="1000">

                </td>
                </tr>
                <?php }?>
                </table><br>

                <input name="titulo" type="hidden" value="<?php echo $campo; ?>">
                <input name="cantidad" type="hidden" value="<?php echo $cantidad; ?>">
                <input name="suma" type="hidden" value="<?php echo $suma; ?>">
                <input name="fecha" type="hidden" value="<?php echo $fecha; ?>">
                <input name="id" type="hidden" value="<?php echo $id; ?>">
                <input class="submit" type="submit" value="Insertar"></input>
                <!--almacenan los datos y se mandan por post a intertarPreguntas-->
            </form>







    <?php 
    
  }else{
    $titulo = $_POST["titulo"];
    $cantidad = $_POST["cantidad"]; 
?>
 <div class="container">
            <div class="container form-top">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                        <div class="panel panel-danger">
                            <div class="panel-body">
<section id="form">
	<form action="insert_cuestion.php" class="contact_form" method="post">
		<h3>Campo <?php echo $titulo; ?></h3>
		<table>
			<?php

			 //ciclo para recorrer la cantidad de preguntas ingresadas
			for ($i=1; $i <= $cantidad; $i++) {
			?>
		<tr>
			<td>Pregunta <?php echo $i; ?>&nbsp;
			<input name="pregunta<?php echo $i; ?>" type="text" size = "50" maxlength="1000">

        </td>
		</tr>
	    <?php }?>
                <!--<p>Tipo de preguntas</p>-->
                <input type="radio" name="tipo" id="abierta" value="0">
                <label for="abierta">Preguntas abiertas</label><br>
        
                <input type="radio" name="tipo" id="multiple" value="1">
                <label for="multiple">Preguntas de opción múltiple</label>
		</table><br>
		<input class="submit" type="submit" value="Insertar"></input>
		<!--almacenan los datos y se mandan por post a intertarPreguntas-->
		<input name="titulo" type="hidden" value="<?php echo $titulo; ?>">
		<input name="cantidad" type="hidden" value="<?php echo $cantidad; ?>">
	</form>
<?php 
}
?>
</section>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<?php 
}else{
header("Location: index.html");
}
?>