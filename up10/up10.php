<?php

/* $numeros = ["2", "4", "3"]; */
$numeros = explode(",", $_GET['a']); // ?a[1]=i&a[2]=j&... || con explode ?a=1,2,3,4...
$resultado;

function sumaNumeros($array)
{
    $resultado = 0;
    foreach ($array as $numero) {
        $resultado = $resultado + $numero;
    }
    echo "El resultado de la suma de todos los numeros es $resultado <br>";
}

sumaNumeros($numeros);

/* echo "El resultado de la suma de todos los numeros es $resultado"; */

/* ------------------------↓ Codigo de Pitel ↓------------------------- */

echo "El resultado de la suma de todos los numeros es " . array_sum($numeros);
