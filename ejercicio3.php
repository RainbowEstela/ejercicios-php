<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <?php

        $radio = rand (1,100);
        $volumen = (4 / 3) * pi() * (pow( $radio , 3));

        echo "El volumen de una esfera de radio " . $radio . " es " . $volumen;

    ?>
</body>
</html>