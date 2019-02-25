<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<form name="formulario" method="post" action="almacenar.php">
        <p>
            <label for="Email">Email:</label>
            <input type="text" name="Email" id="Email" value="<?php  if (isset($_COOKIE['mailUsu'])) { echo $_COOKIE['mailUsu']; ?>"/>
                
        </p>
        <p>
            <label for="Passwprd">Password:</label>
            <input type="password" name="Password" id="Password"/>
        </p>
        <input type="checkbox" name="¿Recordar email?">
        <input type="submit" value="Enviar formulario">
        </form>
    
</body>
</html>