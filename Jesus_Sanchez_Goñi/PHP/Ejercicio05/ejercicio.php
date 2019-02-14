<?php
function calcularHipotenusa($fichero) {
    //$nombreExt= explode(".", $fichero);
    //return $strtoupper($nombreExt[1]);

    $inicio = strrpos($fichero, ".") + 1;
    return strtoupper(substr($fichero, $inicio)));
}

$nombreFichero = "fichero.txt";
$ext = calcularExtension($nombreFichero);
print "<p>La extensión del archivo $nombreFichero es $ext</p>";



?>