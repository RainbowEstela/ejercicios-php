<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio5</title>
</head>
<body>
    <?php
        //funcion para pasar de unidades a escrito
        function devolverUnidadTexto($numero) {
            switch ($numero) {
                case 0:
                    return "";
                case 1:
                    return "uno";
                case 2:
                    return "dos";
                case 3:
                    return "tres";
                case 4:
                    return "cuatro";
                case 5:
                    return "cinco";
                case 6:
                    return "seis";
                case 7:
                    return "siete";
                case 8:
                    return "ocho";
                case 9:
                    return "nueve";
            } 
        }

        //variables
        $numero = rand(0,99);
        $decenas = intdiv($numero, 10);
        $unidades = $numero % 10;
        
        $numEnTexto = "";
        echo $numero . "<br>";
        /*
        echo $decenas . "<br>";
        echo $unidades . "<br>";
        */

        //comprobacion de si es cero
        if($numero == 0) {
            echo "cero";
        //comprobacion de si es menor de 10
        } elseif ($numero < 10) {
            echo devolverUnidadTexto($unidades);
        //switch dependiendo de las decenas
        } else {
            switch ($decenas) {
                case 1:

                    switch ($unidades) {
                        case 0:
                            $numEnTexto = "Diez";
                            break;
                        case 1:
                            $numEnTexto = "Once";
                            break;
                        case 2:
                            $numEnTexto = "Doce";
                            break;
                        case 3:
                            $numEnTexto = "Trece";
                            break;
                        case 4:
                            $numEnTexto = "Catorce";
                            break;
                        case 5:
                            $numEnTexto = "Quince";
                            break;
                        default:
                            $numEnTexto = "Dieci". devolverUnidadTexto($unidades);

                        
                    }
                    break;
                case 2:
                    return "dos";
                case 3:
                    return "tres";
                case 4:
                    return "cuatro";
                case 5:
                    return "cinco";
                case 6:
                    return "seis";
                case 7:
                    return "siete";
                case 8:
                    return "ocho";
                case 9:
                    return "nueve";
            }

            echo "numero en texto es " . $numEnTexto;
        }
    ?>
</body>
</html>