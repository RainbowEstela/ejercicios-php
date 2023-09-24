<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php

        //variables
        $numero = rand(0,99);
        $decenas = intdiv($numero, 10);
        $unidades = $numero % 10;
        
        $unidadesArray = array("cero","uno","dos","tres","cuatro","cinco","seis","siete","ocho","nueve");
        $decenasArray = array("Diez","Veinte","Treinta","Cuarenta","Cincuenta","Sesenta","Setenta","Ochenta","noventa");
        $decimosEspeciales = array("","Once","Doce","Trece","Catorce","Quince");
        $decimosYVeinteavos = array("dieci","veinti");        

        $numEnTexto = "";
        echo $numero . "<br>";
        /*
        echo $decenas . "<br>";
        echo $unidades . "<br>";
        */

        //comprobaciones
        if ($decenas == 0) {
            $numEnTexto = $unidadesArray[$unidades];
        } elseif ($unidades == 0) {
            $numEnTexto = $decenasArray[$decenas - 1];
        
        } elseif ($decenas == 1 && ( $unidades > 0 && $unidades < 6)) {
            $numEnTexto = $decimosEspeciales[$unidades];
        } elseif ($decenas == 1 || $decenas == 2) {
            $numEnTexto = $decimosYVeinteavos[$decenas - 1] . $unidadesArray[$unidades];
        } else {
            $numEnTexto = $decenasArray[$decenas -1] . " y " . $unidadesArray[$unidades];
        }

        //escribir el numero en letra
        echo $numEnTexto;
    ?>
</body>
</html>