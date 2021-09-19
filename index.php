<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primer proyecto php</title>
</head>
<body>
<h1>Primer Codigo php</h1>

<?php 
    echo "<h1> Facundo Lobo </h1>";
    print("PHP Es un lenguaje de programacion que se adapta muy bien 
    al desarrollo web, es del lado del servidor, el servidor lee el 
    leguaje PHP, y manda los datos transformados en HTML, se puede 
    incrustar codigo HTML");

    echo "<hr>";
    

    
    #variables 1 
    echo '<h2> Muestra de variables</h2>';

    $variable1 = "var1";
    $variable2Numerica = 123;
    
    echo $variable1;
    echo '<br>';
    echo $variable2Numerica;


    #concatenar variables 2
    echo '<h2> Muestra de variables con concatenación</h2>'; 
    $nombre = "facu";
    $edad = 26;

    
    echo '<p> la persona '.$nombre.' tiene: '.$edad.' de edad</p>' ;
    
?>

<?php 
    
    #Muestra de los valores de Array
    echo '<h2> Muestra de los valores de Array</h2>'; 
    $personas = ["fabrizio", "Franco", "Antonio", "Romina"];
    echo '<p> el valor de tercer elemento es:'.$personas[2].'</p>';
    echo '<span>Recorrido del array</span>';

?>
    
    <h4>Listado Array</h4>
        <ul>
            <?php
                foreach ($personas as $nombre) {
                    echo "<li>$nombre</li>";
                }
            ?>
        </ul>


        

<?php   
      
    #Envio de variables por URL
    echo '<h2> Envio de variables por URL</h2>'; 
        #Funcion para saber  obtener el valor por URL
        function existeParametro($parametro, $numero){
            if(isset($_GET[$parametro])){
                $valor = $_GET[$parametro];
            
            }else{
                $valor = "texto defecto";
                if($numero){
                    $valor= 170;
                }    
            }


            return $valor;
    }

    #Declaracion de variables
    $nombre = existeParametro("nombre", false);
    
    $altura = existeParametro("altura", true);
    
    $texto = "La persona de nombre: $nombre";

    $textofinal = "<p>".$texto.", su altura es :".$altura."</p>";

    echo $textofinal;

    #Condiciones
    if($altura >= 180){
        echo '<p style="background:#74b9ff; color:#2d3436; "> Eres una persona grande </p>';
    }else{
        echo '<p style="background:#81ecec; color:#2d3436;"> Eres una persona baja </p>';
        
    }


?>
</body>
</html>


