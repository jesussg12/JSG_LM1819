<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    if (isset($_COOKIE['nombreUsu'])){
        print "Hola" . $_COOKIE['nombreUsu'];
    } else {
        print "Hola Anónimo";
    }
    ?>

    </p>
    <p>
        <a href="segunda.php">Ir a segunda</p>
    </p>
    
</body>
</html>