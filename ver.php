<?php
require_once 'BD.php';  //para incluir la clase que maneja la BD
$BD = new BD();
session_start();
if (isset($_SESSION['work'])) {


$id = $_GET['id'];						
									$BD->MostrarPreguntas($id);
									
										# code...
										$Preguntas = $BD->MostrarPreguntas($id);
										$Campos = $BD->MostrarCampos($id);

										foreach ($Campos as $dato) {
											$idC = $dato['id'];
											$titulo = $dato['titulo'];

											$cantidad = $dato['cantidad'];
											$tipo = $dato['tipo'];
										}
								
?>





<br><br><br><br><br>
<!DOCTYPE html>
<html><head>
        <head>
	<meta charset="UTF-8">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<script src="assets/js/customs.js"></script>
	<title>Custom Radio Buttons y Checkboxes</title>
</head>
<style type="text/css">
	

	button {
    background-color: #585858;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
textarea{
min-width: 80%;

}

</style>

 <body onload="nobackbutton();">
	<div class="wrap">

		<div class="info">
			<h1>ENCUESTA</h1>
			
			
		</div>
		<div>
				<left><h2><?php 
				if (!isset($titulo)) {
					# code...		

				$id++;

				
	$total = $BD->TotalDeCampos();
    $tolerancia = 19;
    $suma = $total + $tolerancia;
    
    if ($suma == $id){
        # code...
        header('location: total.php');
    }
    else
    {header('location: ver.php?id='.$id);}

					
				
				}
				
				else{

				echo $titulo;}

				?></h2></left><br>
			</div>
			
		<div>







		<form action="insert_respuesta.php" class="formulario" method="POST">


      <?php if ($tipo == 1) {
			$i = 1;						 
			foreach ($Preguntas as $row) {

				$pregunta = $row['pregunta'];
				$IdPreg = $row['id'];

				echo '<h2><left>'.$i.' .- &nbsp;&nbsp;'.$row['pregunta'].'<left></h2>';?>
                <div class="radio" id="<?php echo $i; ?>">
				<input type="radio" name="opcion<?php echo $i; ?>" id="siempre<?php echo $i; ?>" value="1" required />
				<label for="siempre<?php echo $i; ?>">Siempre</label>
		
				<input type="radio" name="opcion<?php echo $i; ?>" id="casi<?php echo $i; ?>" value="2" required />
				<label for="casi<?php echo $i; ?>">Casi siempre</label>
		
				<input type="radio" name="opcion<?php echo $i; ?>" id="aveces<?php echo $i; ?>" value="3" required />
				<label for="aveces<?php echo $i; ?>">Algunas veces</label>

				<input type="radio" name="opcion<?php echo $i; ?>" id="casiN<?php echo $i; ?>" value="4" required />
				<label for="casiN<?php echo $i; ?>">Casi nunca</label>

				<input type="radio" name="opcion<?php echo $i; ?>" id="nunca<?php echo $i; ?>" value="5" required />
				<label for="nunca<?php echo $i; ?>">Nunca</label>
 
										                                     
			<input type="hidden" name="pregunta<?php echo $i; ?>"   required value="<?php echo $pregunta; ?>">
			<input type="hidden" name="IDpregunta<?php echo $i; ?>" required value="<?php echo $IdPreg; ?>">
			<input type="hidden" name="Numero<?php echo $i; ?>"     required value="<?php echo $i; ?>">

			</div>

			
			<?php $i++;} 
			if ($_SESSION['area'] == 1) {
				# code...
				$area = 1;

			}else if ($_SESSION['area'] == 2) {
				# code...
				$area = 2;

			}else if ($_SESSION['area'] == 3) {
				# code...
				$area = 3;

			}else if ($_SESSION['area'] == 4) {
				# code...
				$area = 4;

			}else if ($_SESSION['area'] == 5) {
				# code...
				$area = 5;

			}else if ($_SESSION['area'] == 6) {
				# code...
				$area = 6;

			}else if ($_SESSION['area'] == 7) {
				# code...
				$area = 7;

			}else if ($_SESSION['area'] == 8) {
				# code...
				$area = 8;

			}else if ($_SESSION['area'] == 9) {
				# code...
				$area = 9;

			}else if ($_SESSION['area'] == 10) {
				# code...
				$area = 10;

			}else if ($_SESSION['area'] == 11) {
				# code...
				$area = 11;

			}
			else{
				# code...
				$area = 12;

			}
			?>

			<input type="hidden" name="cantidad" required value="<?php echo $cantidad; ?>">
			<input type="hidden" name="id" required value="<?php echo $id; ?>">
			<input type="hidden" name="area" required value="<?php echo $area; ?>">



			<div>

				<button type="submit">Siguiente</button>  

			</div>
		<?php } else { 
			$i = 1;						 
			foreach ($Preguntas as $row) {

			echo '<h2><left>'.$i.' .- &nbsp;&nbsp;'.$row['pregunta'].'<left></h2>';
			$pregunta = $row['pregunta'];
			$IdPreg = $row['id'];
			?>
			<div>
                <textarea type="text" name="opcion<?php echo $i; ?>" id="siempre<?php echo $i; ?>" 
                required placeholder="Ingrese su respuesta aquí"></textarea> 


             <input      type="hidden" name="pregunta<?php echo $i; ?>"   required value="<?php echo $pregunta; ?>">
			<input type="hidden" name="IDpregunta<?php echo $i; ?>" required value="<?php echo $IdPreg; ?>">
			<input type="hidden" name="Numero<?php echo $i; ?>"     required value="<?php echo $i; ?>">				
			</div>
			<?php $i++;}if ($_SESSION['area'] == 1) {
				# code...
				$area = 1;

			}else if ($_SESSION['area'] == 2) {
				# code...
				$area = 2;

			}else if ($_SESSION['area'] == 3) {
				# code...
				$area = 3;

			}else if ($_SESSION['area'] == 4) {
				# code...
				$area = 4;

			}else if ($_SESSION['area'] == 5) {
				# code...
				$area = 5;

			}else if ($_SESSION['area'] == 6) {
				# code...
				$area = 6;

			}else if ($_SESSION['area'] == 7) {
				# code...
				$area = 7;

			}else if ($_SESSION['area'] == 8) {
				# code...
				$area = 8;

			}else if ($_SESSION['area'] == 9) {
				# code...
				$area = 9;

			}else if ($_SESSION['area'] == 10) {
				# code...
				$area = 10;

			}else if ($_SESSION['area'] == 11) {
				# code...
				$area = 11;

			}
			else{
				# code...
				$area = 12;

			}?>

			<input type="hidden" name="cantidad" required value="<?php echo $cantidad; ?>">
			<input type="hidden" name="id" required value="<?php echo $id; ?>">
			<input type="hidden" name="area" required value="<?php echo $area; ?>">



			<div>

				<button type="submit">Siguiente</button>  

			</div>



<script type="text/javascript">
	
</script>



		<?php } ?>
		</form>





<script type="text/javascript">
import("js/sweetalert.min.js");
import("ttps://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js");
import("https://unpkg.com/sweetalert/dist/sweetalert.min.js");
import("js/bootstrap.min.js");
import("valid.js");
function hey()
{
     swal({
							  title: "Deseas cambiar alguna respuesta?",
							  text: "Una vez que continues no podras regresar",
							  icon: "warning",
							  buttons:  ["Si, CORREGIR!", "No, deseo CONTINUAR!"],
							  dangerMode: true,
							})
							.then((willDelete) => {
							  if (willDelete) {
							    swal("Good job!", "You clicked the button!", "success");
							     
							    window.location.href = 'registrar.php';
							  } else {
							    swal("Corrige alguna respuesta!");
							    
							  }
							});


			return false;






 }
</script>

















		</div>
	</div>
</body>
</html>
<?php 
}else{

  header("Location: index.html");	
}
?>















