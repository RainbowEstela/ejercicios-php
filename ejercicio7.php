<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio7</title>
</head>
<body>
    <?php
        //declaracion del array
        $listaNumeros = [];

        //poner cinco elementos
        for ($i = 0; $i < 5; $i++) {
            
            while(true) {
                $numToAdd = rand (1,10);

                if (in_array($numToAdd,$listaNumeros) == false) {
                    array_push($listaNumeros,$numToAdd);
                    break;
                }
            }
        }

        //pintar las tablas de multiplicar de cada numero
        foreach ($listaNumeros as $numero) {
            for ($i = 1 ; $i < 11 ; $i++) {
                echo $numero . " x " . $i . " = " . ($numero * $i) . "<br>"; 
            }

            echo "<br>";
        }

        //pintar array
        //print_r($listaNumeros);

    ?>
</body>
</html>