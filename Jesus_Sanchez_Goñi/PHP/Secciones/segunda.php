<?php
$nombre = trim(htmlspecialchars($_REQUEST["Nombre"], ENT_QUOTES, "UTF-8"));

session_star();
$_SESSION['nombreWeb'] = $nombre;

header('location; tercera.php')

?>