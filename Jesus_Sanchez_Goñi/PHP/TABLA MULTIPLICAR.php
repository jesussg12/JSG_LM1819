<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    
<?php
for ($tabla=1; $tabla=++) //<-
for ($tabla=2; $tabla=++) //<-
{
    echo "<h3>Tabla del $tabla </h3>";
    
    // generamos la tabla
    for($i=1; $i<=10; $i++) 
    {
     echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
    }
   }




?>


</body>
</html>