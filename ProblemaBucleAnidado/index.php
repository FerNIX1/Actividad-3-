<?php
$altura = 5; // Puedes ajustar la altura de la pirámide cambiando este valor

for ($i = 1; $i <= $altura; $i++) {
    // Imprime espacios en blanco antes de los asteriscos
    for ($j = 1; $j <= $altura - $i; $j++) {
        echo " ";
    }

    // Imprime los asteriscos
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }

    // Salto de línea al final de cada fila
    echo PHP_EOL;
}
?>
