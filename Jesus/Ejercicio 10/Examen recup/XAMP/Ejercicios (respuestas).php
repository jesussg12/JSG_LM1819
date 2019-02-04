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
$aleatorio = rand(1,10);
if ($aleatorio < 5) {
    echo "<pclass='rojo'>El valor $aleatorio es menor que 5</p>";    
} else  if "<p class='azul'>El valor $aleatorio es mayor que 5</p>";
} else {
    echo "<p class='verde'>El valor es 5</p>";
}

?>

</body>
</html>