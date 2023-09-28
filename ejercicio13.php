<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio13</title>
</head>
<body>
    <?php
        function addElementos(&$array,$valores) {
            foreach($valores as $valor) {
                array_push($array,$valor);
            }
        }

        function deleteElementos(&$array,$borrar = 1) {
            for($i = 0; $i < $borrar; $i++) {
                array_shift($array);
            }
        }

        function pintarElementos($array) {
            echo '<ul>';
            foreach($array as $valor) {
                echo '<li>'. $valor .'</li>'; 
            }
            echo '</ul>';
        }

        function vaciarElementos(&$array) {
            $array = [];
        }
        //pila
        $pila = [];
        //elementos a añadir
        $elementsToAdd = ["Miqota","Paladín","192.168.1.100","Rubí","escudo","Espada"];

        //añadir y mostrar los elementos
        echo "<h3>añadir elementos</h3>";
        addElementos($pila,$elementsToAdd);
        pintarElementos($pila);

        //borrar 3 elementos
        echo "<h3>borrar tres elementos</h3>";
        deleteElementos($pila,3);
        pintarElementos($pila);

        //vaciar pila y añadir elemento macarrones
        echo "<h3>Vaciar pila y añadir elemento macarrones</h3>";
        vaciarElementos($pila);
        addElementos($pila,["macarrones"]);
        pintarElementos($pila);

    ?>
</body>
</html>