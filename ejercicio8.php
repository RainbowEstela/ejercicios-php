<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio8</title>
</head>
<body>
    <h2>El numero ganador es:</h2>

    <h3>
        <?php
            $primitiva = [];

            for ($i = 0 ; $i < 6; $i ++) {
                
                while(true) {
                    $numToAdd = rand (1,46);

                    if (in_array($numToAdd,$primitiva) == false) {
                        array_push($primitiva,$numToAdd);
                        break;
                    }
                }
                
            }

            asort($primitiva, SORT_NUMERIC);

            foreach($primitiva as $winNumber) {
                echo $winNumber . " ";
            }
            

        ?>
    </h3>
    
</body>
</html>