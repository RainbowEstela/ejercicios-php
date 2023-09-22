<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <?php
        $cadena1 = "hola a todo el mundo";
        $cadena2 = " mi nombre es Estela Iniesta Ruiz";

        $cadena3 = $cadena1 . $cadena2;

        $cadena1 .= $cadena2;

        echo "El valor de cadena3 es: " . $cadena3;
        echo "<br>";
        echo "El valor de la cadena 1 concatenada con la cadena dos es: " . $cadena1

    ?>
</body>
</html>