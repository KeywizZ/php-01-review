<?php

$numero = 0;
$filas = $_GET["filas"];


for ($i = 1; $i  <= $filas; ++$i, $numero = 0) {
    for ($espacio = 1; $espacio <= $filas - $i; ++$espacio) {
        echo ("&nbsp;&nbsp;&nbsp;");
    }
    while ($numero != 2 * $i - 1) {
        echo ("*&nbsp;");
        ++$numero;
    }
    echo ("<br>");
}
