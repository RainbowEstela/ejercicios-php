<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio6</title>
</head>
<body>
    <?php
        //declariacion de variables
        $numeroDNI = 0;
        $letrasDNI = array("T","R","W","A","G","M","Y","F","P","D","X","B","N","J","Z","S","Q","V","H","L","C","K","E");

        //crear el numero de DNI
        for( $i = 0; $i < 8; $i++) {
            $numeroDNI *=10;
            $numeroDNI += rand(0,9);
        }

        //saber letra
        $miLetra = $letrasDNI[$numeroDNI % 23];
        //escribir DNI
        if ($numeroDNI < 10000000) {
            echo "0". $numeroDNI . $miLetra;
        } else {
            echo $numeroDNI . $miLetra;
        }

    ?>
</body>
</html>