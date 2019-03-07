<?php
$pies = trim(htmlspecialchars($_RESQUEST["pies"], EN_QUOTES, "UTF-8"));
$pulgadas = trim(htmlspecialchars($_RESQUEST["pulgadas"], EN_QUOTES, "UTF-8"));


$piesok = false;
$pulgadasok = false;


if (empty($pies)) {
    print "<p>Campo Pies vacío</p>";
} else if (filter_var($pies,FILTER_VALIDATE_INT)) {
    print "<p>Campos pies No es un Número Entero </p>";
} else if ($pies <0) {
    print "<p>Campo pies debe ser >=0</p>";
} else {
    $piesok = true;
}

if (empty($pulgadas)) {
    print "<p>Campo Pulgadas vacío</p>";
} else if (filter_var($pulgadas,FILTER_VALIDATE_INT)) {
    print "<p>Campos Pulgadas No es un Número Entero </p>";
} else if ($pulgadas <0) {
    print "<p>Campo pulgadas debe ser >=0</p>";
} else {
    $pulgadasok = true;
}


 if ($piesok && $pulgadasok) {
     $cem = ($pies * 12 +$pulgadas) * 2.54;
     print"<p>$pies pies y $pulgadas pulgadas son $cm centímetros </p>;
}
?>