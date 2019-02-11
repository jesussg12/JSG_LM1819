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
{
    echo "<h3>Tabla del $tabla </h3>";
    for($i=1; $i<=10; $i++) 
    {
     echo "$tabla x $i = ". ($tabla*$i) . "<br/>";
    }
   }
?>
<?php
$dia=date("d");
$inicio=1;
while ($inicio<=$dia)
{
  echo $inicio."<br>";
  $inicio++;
}
?>

</body>
</html>