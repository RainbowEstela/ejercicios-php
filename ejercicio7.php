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
        $listaNumeros = array(0);

        //poner cinco elementos
        for ($i = 0; $i < 5; $i++) {
            $repetido = true;
            $listaNumeros[$i] = rand (1,10);

            while($repetido == true) {

                $repetido = false;
                
                for ($j = 0; $j < $i; $j ++) {
                    
                    if ($listaNumeros[$j] == $listaNumeros[$i]) {
                        $repetido = true;
                    }
                }

                if ($repetido == true) {
                    $listaNumeros[$i] = rand(1,10);
                }
            }
        }

        //pintar array
        print_r($listaNumeros);

    ?>
</body>
</html>