<?php



$cadenas = ["patata", "cebolla", "sal", "pimienta", "te", "agua"];
$corto = "";
$largo = "";
$position;

foreach ($cadenas as $palabra) {
    $largo = strlen($palabra) > strlen($largo) ? $palabra : $largo;
    $corto = (strlen($palabra) < strlen($corto) || strlen($corto) == 0) ? $palabra : $corto;
}

echo "El largo es $largo y el corto es $corto";
