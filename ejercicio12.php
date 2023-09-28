<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio12</title>
</head>
<body>
    <?php
        //diccionario
        $diccionario = [
            "gato" => "cat",
            "guerrero" => "Warrior",
            "feliz" => "happy",
            "luz" => "light",
            "oscuridad" => "darkness",
            "avaricia" => "greed",
            "poder" => "power",
            "madera" => "wood",
            "hierro" => "iron",
            "oro" => "gold",
            "papel" => "paper",
            "ordenador" => "computer",
            "tarjeta" => "card",
            "coche" => "car"
        ];

        //variable con la palabra a buscar
        $palabra = "luz";

        //comprobar si la palabra esta o no
        echo "<h3>resultado de la busqueda:</h3>";
        if(key_exists($palabra,$diccionario)) {
            echo $palabra . " en inglés significa " . $diccionario[$palabra];
        } else {
            echo "la palabra <strong>" . $palabra . "</strong> no se encuentra en el diccionario";
        }
        
        ksort($diccionario, SORT_ASC);

        //pintar el diccionario ordenado en español
        echo "<h3>El diccionario ordenado en español:</h3>";
        echo '<ul>';
        foreach($diccionario as $clave => $valor) {
            echo '<li>'. $clave. " -> " . $valor .'</li>'; 
        }
        echo '</ul>';
    ?>
</body>
</html>