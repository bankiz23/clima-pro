<?php 
//realizdo por sj
    require_once 'BD.php';  //para incluir la clase que maneja la BD
    $BD = new BD();
    $id = $_POST['id'];
    $area = $_POST['area'];
    
    $cantidad = $BD->ContarPreguntas($id);
                    $i = 1;
            while ($i <= $cantidad) {
                $res = 'opcion'.$i;
                $respuesta = $_POST[$res];
                $array[$i] = $respuesta;

                $preg = 'pregunta'.$i;
                $pregunta = $_POST[$preg];
                $array2[$i] = $pregunta;

                $iden = 'IDpregunta'.$i;
                $IDpregunta = $_POST[$iden];
                $array3[$i] = $IDpregunta;                

                $nume = 'Numero'.$i;
                $Numero = $_POST[$nume];
                $array4[$i] = $Numero;

                $i = $i + 1;
            }
                                                    $j = 1;
                                                    $dato = "";
                                                    while ($j <= $cantidad) {
                                                                if ($array[$j] == 1) {
                                                                    # code...

                                                                    $clave = 1;
                                                                    $dato = "siempre";
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }
                                                                else if ($array[$j] == 2) {
                                                                    # code...
                                                                    $clave = 2;
                                                                    $dato = "casi siempre";
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }else if ($array[$j] == 3) {
                                                                    # code...
                                                                    $clave = 3;
                                                                    $dato = "algunas veces";
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }else if ($array[$j] == 4) {
                                                                    # code...
                                                                    $clave = 4;
                                                                    $dato = "casi nunca";
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }else if ($array[$j] == 5) {
                                                                    # code...
                                                                    $clave = 5;
                                                                    $dato = "nunca";
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }
                                                                else{
                                                                    $clave = 6;
                                                                    $dato = $array[$j];
                                                                    $NumeroPregunta = $array4[$j];
                                                                    $idPreguntass = $array3[$j];
                                                                    $Preguntaa = $array2[$j];
                                                                }

                                                                $BD->RegistroResultados($dato, $clave, $NumeroPregunta, $idPreguntass, $Preguntaa, $id, $area);
                                                                echo $array[$j];
                                                                    $j = $j + 1;
                                                                }
                                                                $id++; 
             header('location: ver.php?id='.$id); 
    

?>