<?php

$numero = isset($_GET["numero"]) ? (is_numeric($_GET["numero"]) ? $_GET["numero"] : 5) : 5;

$total = $numero;

$contador=1;

while($total < 10000) {
    $total = pow($numero, ++$contador);
}

echo "Si es $numero hay que elevarlo a $contador => $total";

?>