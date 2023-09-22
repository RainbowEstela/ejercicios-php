<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <?php
        /**
         * la funcion rand puede aceptar dos parametros
         * que son respectivamente el numero minimo y el numero maximo que puede elegir
         */
        $primera = rand(0,100);
        $segunda = rand(1,100);

        echo 'primer numero ' . $primera . ' segundo numero ' . $segunda;
        echo '<br><br>';
        echo 'la difirencia entre el primer valor menos el segundo es '. ($primera - $segunda);
        echo '<br><br>';
        echo 'la división entre el primer elemento y el segundo es ' . ($primera / $segunda );

    ?>
</body>
</html>