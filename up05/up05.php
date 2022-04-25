<?php 

$value = $_GET['string'];

if($value === strrev($value)) {
    echo "$value es un palindromo";
} else {
    echo "$value no es un palindromo";
}