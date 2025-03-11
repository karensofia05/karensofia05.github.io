<?php
// Generar un número aleatorio entre 1 y 100
$numero = rand(1, 100);

// Determinar si es par o impar
if ($numero % 2 == 0) {
    echo "El número $numero es par.";
} else {
    echo "El número $numero es impar.";
}
?>