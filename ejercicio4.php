<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

        $a = rand(-10,10);
        $b = rand(-10,10);
        $c = rand(-10,10);

        //comprobraciones para que quede bien la funcion al pintarse
        if($b < 0 && $c < 0) {
            echo "la funcion: ". $a . "*x^2 ". $b . "*x ". $c ;
        } elseif ($b < 0) {
            echo "la funcion: ". $a . "*x^2 ". $b . "*x +". $c ;
        } elseif ($c < 0) {
            echo "la funcion: ". $a . "*x^2 +". $b . "*x ". $c ;
        } else {
            echo "la funcion: ". $a . "*x^2 +". $b . "*x +". $c ;
        }
        echo "<br><br>";
        //comprobacion de si la funcion tiene solucion real
        if( ((pow($b , 2)) - (4 * $a * $c)) < 0) {
            echo "La función no tiene solucion real";
        } elseif($a == 0) {
            $solucion1 = (-$c) / $b;
            echo "La solucion es: " . $solucion1;
        } else {
            //calculo de las soluciones
            $solucion1 = (-$b + (sqrt((pow($b , 2)) - (4 * $a * $c)))) / (2 * $a);
            $solucion2 = (-$b - (sqrt((pow($b , 2)) - (4 * $a * $c)))) / (2 * $a);

            echo "primera solución: " . $solucion1;
            echo "<br>segunda solución: ". $solucion2;
        }
    ?>
</body>
</html>