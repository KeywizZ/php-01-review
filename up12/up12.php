<?php

$numero = $_GET["number"];

function factorial($numero)
{
    $array = [];
    $counter = $numero;
    for ($i = 1; $i <= $counter; $i++) {
        array_push($array, $numero);
        /* print_r("$numero"); */
        --$numero;
    }

    $total = 1;
    foreach ($array as $key => $value) {
        $total = $total * $value;
    }
    echo "El factorial de $counter es $total";
}


factorial($numero);
