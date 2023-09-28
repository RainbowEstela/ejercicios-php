<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio11</title>
</head>
<body>
    <?php
        //declaracion de variables
        $matriz = [];
        $sumFilas = [];
        $sumColumnas = [];
        $longitudMatriz = 7;

        //rellenar la matriz con 1 en diagonales y aleatorios en el resto
        for($i = 0; $i < $longitudMatriz; $i++) {
            $fila = [];
            for($j = 0; $j < $longitudMatriz; $j++) {
                
                if ($i == $j || $i + $j == $longitudMatriz - 1) {
                    array_push($fila,1);
                } else {
                    array_push($fila,rand(2,9));
                }
            }

            array_push($matriz,$fila);
        }

        //pintar la matriz
        echo '<h3>matriz:</h3>';
        foreach($matriz as $fila) {
            foreach($fila as $valor) {
                echo $valor . " ";
            }
            echo "<br>";
        }

        //suma de las filas
        foreach($matriz as $fila) {
            $sumaTotal = 0;
            foreach($fila as $num) {
                $sumaTotal += $num;
            }
            array_push($sumFilas,$sumaTotal);
        }

        //pintar la suma de cada fila
        echo '<h3>la suma de los valores de cada fila son</h3>';
        echo '<ul>';
        foreach($sumFilas as $valor) {
            echo '<li>'. $valor .'</li>'; 
        }
        echo '</ul>';

        //suma de cada columna
        for($i=0 ; $i < $longitudMatriz; $i++) {
            $sumaTotal = 0;
            foreach($matriz as $fila) {
                $sumaTotal += $fila[$i];
            }

            array_push($sumColumnas,$sumaTotal);
        }

        //pintar suma de cada columna
        echo '<h3>la suma de los valores de cada fila son</h3>';
        foreach($sumColumnas as $valor) {
            echo $valor . ' '; 
        }
    
    ?>
</body>
</html>