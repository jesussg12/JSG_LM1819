<?php
$edad = $_REQUEST["edad"];

$email = $_REQUEST["email"];ç


if (is_numeric($edad)) {
    print "su edad es $edad";
} else { 
    print"Error al introducir la edad";
}

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    print"Email correcto";
} else {
    print"Email incorrecto";
}

?>