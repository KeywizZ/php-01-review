<?php

$colours = ['blanco', 'verde', 'rojo'];


$result = implode(", ", $colours);

echo $result;

foreach ($colours as  $color) {
    echo "<li>$color</li>";
}
