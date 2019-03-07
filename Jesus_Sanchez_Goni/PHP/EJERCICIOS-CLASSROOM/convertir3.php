<?php
$tempe = trim(htmlspecialchars($_REQUEST["Temperatura"], ENT_QUOTES, "UTF-8"));
$unidad = trim(htmlspecialchars($_REQUEST["Opciones"], ENT_QUOTES, "UTF-8"));

if (!empty($tempe)) {
    print"<p>Temperatura vacía</p>";
}else if (!is_numeric($tempe)) {
    print"<p>Temperatura no Númerica</p>";
} else if ($unidad == "c" && $tempe < -273.15){
    print "<p>Temperatura Celsius Incorrecta</p>";
} else if ($unidad == "f" && $tempe < -459.67) {
    print "<p> Temperatura Farenheitt Incorrecta</p>";
} else {
    if ($unidad == "c"){
        $resFar = round (($tempe * 1.8) +32, 2);
        print "<p>$tempe ºC son $resFar ºF</p>"
    }else {
        $resCel = round (($tempe -32) / 1.8, 2);
        print "<p>$tempe ºF son $resCel ºC</p>";
    }
} 



?>