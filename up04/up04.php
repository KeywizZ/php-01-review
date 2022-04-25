<!-- 
    Dado el nombre del fichero, si termina en .exe imprimirlo en mayusculas y si termina
    en .db imprimirlo en minusculas
 -->

<?php

$fichero = $_GET["nombredelfichero"]; // En la URL añadimos ?nombredelfichero=(aqui va el valor que queramos pasarle)
                                    // Quedaria como http://localhost/ejercicios/up04.php?nombredelfichero=word.exe para pasar el valor "word.exe"
                                    // nombredelfichero es el nombre del string a poner en la URL

if (str_ends_with($fichero, ".exe")) {
    echo strtoupper($fichero);
} else if (str_ends_with($fichero, ".db")) {
    echo strtolower($fichero);
} else {
    echo "No entra en los parametros";
};


?>