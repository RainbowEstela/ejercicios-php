<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio9</title>
</head>
<body>

    <?php

        //declaracion de variables
        $colores = [];

        //elegir colores y meterlos en array colores
        for($i = 0; $i < 5; $i++) {
            $oneColor = [];

            for($j = 0; $j <3; $j++ ) {
                array_push($oneColor, rand(0,255));
            }

            array_push($colores,$oneColor);

        }

        print_r($colores);

        echo '
        <svg height="100" width="100" >
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
        </svg>
        ';

        echo '
        <svg height="100" width="100">
            <circle cx="50" cy="50" r="40" stroke="black" stroke-width="3" fill="red" />
        </svg>
        ';

    ?>

</body>
</html>