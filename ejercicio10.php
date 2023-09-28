<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio10</title>
</head>
<body>
    <?php
        //declarar variables
        $numNarturales = [];
        $mediaPar = 0.0;
        $impares = [];
        $pares= [];
        $totalSumaPares = 0;
        
        //rellenar array con los 10 primeros numeros naturales
        for ($i = 1; $i < 11; $i++) {
            array_push($numNarturales,$i);
        }
        
        //sacar llenar array de los pares y llenar el array de impares
        foreach($numNarturales as $num) {
            if($num % 2 == 0 ) {
                array_push($pares,$num);
                $totalSumaPares += $num;
            } else {
                array_push($impares,$num);
            }
        }

        //media de los pares
        $mediaPar = $totalSumaPares / count($pares);

        //pintar media par
        echo '<h3>La media de los 10 primeros numero naturales pares es:</h3>';
        echo $mediaPar . '<br>';

        //pintar los numeros impares
        echo '<h3>Los primeros numeros naturales impares hasta el 10 son</h3>';
        echo '<ul>';
        foreach($impares as $impar) {
            echo '<li>'. $impar .'</li>'; 
        }
        echo '</ul>';
        
    ?>
</body>
</html>