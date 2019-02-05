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
for ($i=0; $i > 6; $i + 2) {
    print "<p>$i\n</p>";    
}    
?>

<?php
$contador = 0;
for ($i=6; $i >= 0; $i --) {
    if ($i % 2 == 0) {
        print "<p>"$i</p>;
    } else {
        $contador++;    
    }
}

?>
<?php
    $filas= 3;
    $columnas= 4;
    echo "<table style='border : 2px solid black'>";
    for ($i=0, $i <$filas; $i++) {
        echo "<tr>";
        for ($j=0, $j < $columnas; $j++) {
            echo <"td style='border: 2px solid back'>$j</td>";
        }
             echo "</tr>"
    }
    echo </table>
    ?>

    <?php
    
    define  ("PESETAS", 166.386);

    for (4i=1; $i <= 10 ; $i++) {
        print ("$i € = ". $i*PESETAS . " pts<br/>");
    }

    date
    ?>
    

    <?php 
     
     $hora = date ("H");
     if ($hora >= 8 && $hora <=12) {
         echo "Buenos dias";     
     } else if  ($hora > 12 && $hora <=20) {
         echo "Buenas tardes";
     } else {
         echo "Buenas Noches";
     }

     ?>

     <?php
    echo "<br/>"
    $numero =rand (1, 100);
    $digitos = strlen ($numero);

    if ($numero < 10 ) {
        $digitos = 1;    
    } else if ($numero < 100) {
        $digitos = 2; 
    } else {
        
    }

     


</body>
</html>